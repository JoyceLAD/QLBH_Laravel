<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Phanquyen;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function registration()
    {
        return view('register');
    }    
    public function register(Request $request)
    {
        $request ->validate([
            'username' => 'required|unique:taikhoan',
            'password' => 'required|min:6',
            'ten' => 'required',

        ],[
            'username.unique' => 'Tồn tại tài khoản',
            'password.min' => 'Mật khẩu cần ít nhất 6 ký tự',
        ]);
        $data = $request ->all();
        $check = $this ->create($data);
        return redirect("login");
    }

    public function create(array $data)
    {
        return Account::create([
            'ten' => $data['ten'],
            'username' => $data['username'],
            'password' => Hash::make($data['password'])
        ]);
    }    
    public function login(Request $request) {
        $request -> validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request ->only('username', 'password');
        $userId = Account::attempt($credentials);
        if($userId){
            Session::put('userId',$userId );        
            return redirect()->route('dasboard');
        }else
        {
            return redirect()->route('login')->withError('Tên đăng nhập hoặc mật khẩu không đúng');
        }
        }
    public function signOut()
    {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
    public function welcome()
    {
        if (Session::has('userId')) {
            $id = Session::get('userId')->id_tk;
            if ($id !== null) {
                $result = Phanquyen::check($id);
                //chu
                if($result == 1)
                {
                    Session::put('role', 'Chủ');        
                    return view('welcome');
                }else if($result == 0){
                    Session::put('role', 'Nhân viên');        
                    return view('welcome');
                }else{
                    Session::put('role', 'Trắng');        
                    return view('welcome');
                }
            }
    }else{
        return redirect("login")->withSuccess('Bạn cần đăng nhập trước');
    }

}
   
}