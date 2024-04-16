<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;
use App\Models\Phanquyen;
use App\Models\Account;
use App\Models\Donhang;
use Illuminate\Database\Eloquent\ModelNotFoundException;
class RoleController extends Controller
{
    public function getrole()
    {
        if (Session::has('userId')) {
            $id_tk = Session::get('userId')->id_tk;
            if(session('role') !== 'Nhân viên')
            {
                return view('role');
            }
            else{
                return redirect("/")->withErrors('Bạn đã là nhân viên ');
            }
        }
        return redirect("login")->withErrors('Bạn cần đăng nhập trước');
    }

    public function postrole(Request $request)
    {
        $request->validate([
            'username' => 'required',
        ]);
        $data = $request->input('username');
        $userid = Session::get('userId')->id_tk;
        $check = Phanquyen::check_duplicaterole($data);
        $checkown = Phanquyen::check_roleforown($data);
        $check_dh = Donhang::check_dh(($data));
        if ($check == 1) {
            return redirect("role")->withErrors('Lỗi do tài khoản đã được thêm quyền');
        } else {
            if($checkown == 1)
            {
                return redirect("role")->withErrors('Lỗi do tài khoản này đang làm chủ');
            }else{
                if($check_dh == 1)
                {
                    return redirect("role")->withErrors('Lỗi do tài khoản này đang có đơn hàng, chỉ có thể phân quyền cho tài khoản không có đơn hàng');
                }else
                {
                    $id_tk2 = Account::getId($data);
                    if ($id_tk2 === null) { 
                        return redirect("role")->withErrors('Tài khoản không tồn tại');
                    } else {
                        $request = Phanquyen::addrole($userid, $id_tk2);
                        if ($request) {
                            return redirect("role")->withSuccess('Thêm quyền thành công');
                        } else {
                            return redirect("role")->withErrors('Thêm quyền thất bại');
                        }
                    }
        
                }
            }
        }
    }
    public function list()
    {
        return view('listrole');
    }
    public function getlistRole()
    {
        $role = Session::get('role');
        $id = Session::get('userId')->id_tk;
        if($id == null)
        {
            return redirect("login")->withErrors('Bạn cần đăng nhập trước');
        }else if($role =="Nhân viên")
        {
            return redirect()->route('list')->withErrors('Tài khoản hiện đã được phân quyền bởi tài khoản khác');
        }else if($role == "Trắng")
        {
            return redirect()->route('list')->withSuccess('Bạn chưa phân quyền cho tài khoản nào');
        }else if($role == "Chủ")
        {
            return redirect()->route('list');
        }

        // {
        //     return view('listrole');
        // }
    }
    public function listRole()
    {
        $id = Session::get('userId')->id_tk;
        return Phanquyen::listRole($id);
    }
    public function deleterole1(Request $request)
    {
        $request -> validate([
            'id_pq' => 'required',
        ]);
        $id = $request->input('id_pq');

        try {
            $pq = Phanquyen::where('phanquyen.id_pq', $id)->firstOrFail();
            
            if ($pq) {
                $pq->delete();
                return redirect()->route('list')->withSuccess('Xóa quyền thành công');
            } else {
                return redirect()->route('list')->withErrors('Mã phân quyền không tồn tại');
            }
        } catch (ModelNotFoundException $e) {
            return redirect()->route('list')->withErrors('Mã phân quyền không tồn tại');
        }
    }
    public function deleterole2(Request $request)
    {
        $request -> validate([
            'username' => 'required',
        ]);
        $username = $request->input('username');

        $id = Session::get('userId')->id_tk;
        try {
            $pq = Phanquyen::join('taikhoan','taikhoan.id_tk','=','phanquyen.id_tk2')
            ->where('taikhoan.username', $username)
            ->where('phanquyen.id_tk1', $id)
            ->firstOrFail();
            
            if ($pq) {
                $pq->delete();
                return redirect()->route('list')->withSuccess('Xóa quyền thành công');
            } else {
                return redirect()->route('list')->withErrors('Mã phân quyền không tồn tại');
            }
        } catch (ModelNotFoundException $e) {
            return redirect()->route('list')->withErrors('Mã phân quyền không tồn tại');
        }
    }

    }
