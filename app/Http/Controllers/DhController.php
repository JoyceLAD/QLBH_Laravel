<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;
use App\Models\Phanquyen;
use App\Models\Congty;
use App\Models\Donhang;
use App\Models\Khachhang;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class DhController extends Controller
{
    public function getadddh()
    {
        $id = Session::get('userId')->id_tk;
        if ($id !== null) {
            $result = Phanquyen::check($id);
            //chu
            if($result == 1)
            {
                Session::put('role', 'Chủ');        
                return view('adddh');
            }else if($result == 0){
                Session::put('role', 'Nhân viên');        
                return view('adddh');
            }else{
                Session::put('role', 'Trắng');        
                return view('adddh');
            }
        }
        return redirect("login")->withErrors('Bạn cần đăng nhập trước');
    }
    public function getdeletedh()
    {
        $id = Session::get('userId')->id_tk;
        if ($id !== null) {
            $result = Phanquyen::check($id);
            //chu
            if($result == 1)
            {
                Session::put('role', 'Chủ');        
                return view('deletedh');
            }else if($result == 0){
                Session::put('role', 'Nhân viên');        
                return view('deletedh');
            }else{
                Session::put('role', 'Trắng');        
                return view('deletedh');
            }

        }
        return redirect("login")->withErrors('Bạn cần đăng nhập trước');
    }
    public function getupdatedh()
    {
        $id = Session::get('userId')->id_tk;
        if ($id !== null) {
            $result = Phanquyen::check($id);
            //chu
            if($result == 1)
            {
                Session::put('role', 'Chủ');        
                return view('updatedh');
            }else if($result == 0){
                Session::put('role', 'Nhân viên');        
                return view('updatedh');
            }else{
                Session::put('role', 'Trắng');        
                return view('updatedh');
            }

        }
        return redirect("login")->withErrors('Bạn cần đăng nhập trước');
    }



    public  function postadddh(Request $request)
    {
        $request -> validate([
            'id_kh' => 'required',
            // 'id_tk' => 'required',
            'ten_donhang' => 'required',
            'ngay' => 'required',
        ]);
        $id_kh = $request ->input('id_kh');
        $ten_donhang = $request ->input('ten_donhang');
        $ngay = $request ->input('ngay');
        $id_tk1 = Session::get('userId') -> id_tk;

        $id_tk = null;
        if (session('role') == 'Chủ')
        {
            $id_tk = $id_tk1;

        }else if (session('role')== 'Nhân viên')
        {
            $id_tk = Phanquyen::check_own($id_tk1) -> id_tk1;

        }else if (session('role') == 'Trắng')
        {
            $id_tk = $id_tk1;        
        }
        try {
            $kh = Khachhang::findOrFail($id_kh);
            $result = Donhang::create([
                'id_kh'=>$id_kh,
                'id_tk'=>$id_tk,
                'ten_donhang'=>$ten_donhang,
                'ngay'=>$ngay,

            ]);
            if($result !== null)
            {
                return redirect()->route('getadddh')->withSuccess('Thêm đơn thành công với mã đơn hàng là: '.$result->id_dh);
    
            }else {
                return redirect()->route('getadddh')->withErrors('Thêm đơn hàng không thành công');
            }
        } catch (ModelNotFoundException $e) {
            return redirect()->route('getadddh')->withErrors('Khách hàng không tồn tại');
        }        

    }
    public function postdeletedh(Request $request)
    {
        $request->validate([
            'id_dh' => 'required',
        ]);
    
        $id_dh = $request->input('id_dh');
        $id_tk = null;
        $id_tk1 = Session::get('userId')->id_tk;
    
        if (session('role') == 'Chủ') {
            $id_tk = $id_tk1;
        } else if (session('role') == 'Nhân viên') {
            $id_tk = Phanquyen::check_own($id_tk1)->id_tk1;
        } else if (session('role') == 'Trắng') {
            $id_tk = $id_tk1;
        }
    
        try {
            // Tìm đơn hàng dựa trên cả id_dh và id_tk
            $dh = Donhang::where('id_dh', $id_dh)->where('id_tk', $id_tk)->firstOrFail();
            
            // Kiểm tra xem đơn hàng có tồn tại không
            if ($dh) {
                $dh->delete();
                return redirect()->route('getdeletedh')->withSuccess('Xóa đơn hàng thành công');
            } else {
                return redirect()->route('getdeletedh')->withErrors('Đơn hàng không tồn tại');
            }
        } catch (ModelNotFoundException $e) {
            return redirect()->route('getdeletedh')->withErrors('Đơn hàng không tồn tại');
        }
    }
    public  function postupdatedh(Request $request)
    {
        $request -> validate([
            'id_dh' => 'required',
            'id_kh' => 'required',
            'ten_donhang' => 'required',
            'ngay' => 'required',
        ]);
        $id_kh = $request->input('id_kh');
        $id_dh = $request->input('id_dh');
        $id_tk = null;
        $id_tk1 = Session::get('userId') -> id_tk;
        if (session('role') == 'Chủ')
        {
            $id_tk = $id_tk1;

        }else if (session('role')== 'Nhân viên')
        {
            $id_tk = Phanquyen::check_own($id_tk1) -> id_tk1;

        }else if (session('role') == 'Trắng')
        {
            $id_tk = $id_tk1;        
        }
        try {
            $dh = Donhang::find($id_dh, $id_tk);
            if($dh !== null)
            {
                try{
                    $r = Khachhang::findOrFail($id_kh);
                    $dh->update($request->all());
                    return redirect()->route('getupdatedh')->withSuccess('Chỉnh sửa đơn hàng thành công');
        
                }catch (ModelNotFoundException $e) {
                    return redirect()->route('getupdatedh')->withErrors('Khách hàng không tồn tại');
                }  
                }else
            {
                return redirect()->route('getdeletedh')->withErrors('Đơn hàng không tồn tại');
            }

        } catch (ModelNotFoundException $e) {
            return redirect()->route('getupdatedh')->withErrors('Đơn hàng không tồn tại');
        }        
    }
    public  function postupdatedh_home(Request $request)
    {
        $request -> validate([
            'id_dh' => 'required',
            'id_kh' => 'required',
            'ten_donhang' => 'required',
            'ngay' => 'required',
        ]);
        $id_kh = $request->input('id_kh');
        $id_dh = $request->input('id_dh');
        $id_tk = null;
        $id_tk1 = Session::get('userId') -> id_tk;
        if (session('role') == 'Chủ')
        {
            $id_tk = $id_tk1;

        }else if (session('role')== 'Nhân viên')
        {
            $id_tk = Phanquyen::check_own($id_tk1) -> id_tk1;

        }else if (session('role') == 'Trắng')
        {
            $id_tk = $id_tk1;        
        }
        try {
            $dh = Donhang::find($id_dh, $id_tk);
            if($dh !== null)
            {
                try{
                    $r = Khachhang::findOrFail($id_kh);
                    $dh->update($request->all());
                    return redirect()->route('dasboard')->withSuccess('Chỉnh sửa đơn hàng thành công');
        
                }catch (ModelNotFoundException $e) {
                    return redirect()->route('dasboard')->withErrors('Khách hàng không tồn tại');
                }  
                }else
            {
                return redirect()->route('dasboard')->withErrors('Đơn hàng không tồn tại');
            }

        } catch (ModelNotFoundException $e) {
            return redirect()->route('dasboard')->withErrors('Đơn hàng không tồn tại');
        }        
    }
    public function postdeletedh_home(Request $request)
    {
        $request->validate([
            'id_dh' => 'required',
        ]);
    
        $id_dh = $request->input('id_dh');
        $id_tk = null;
        $id_tk1 = Session::get('userId')->id_tk;
    
        if (session('role') == 'Chủ') {
            $id_tk = $id_tk1;
        } else if (session('role') == 'Nhân viên') {
            $id_tk = Phanquyen::check_own($id_tk1)->id_tk1;
        } else if (session('role') == 'Trắng') {
            $id_tk = $id_tk1;
        }
    
        try {
            // Tìm đơn hàng dựa trên cả id_dh và id_tk
            $dh = Donhang::where('id_dh', $id_dh)->where('id_tk', $id_tk)->firstOrFail();
            
            // Kiểm tra xem đơn hàng có tồn tại không
            if ($dh) {
                $dh->delete();
                return redirect()->route('dasboard')->withSuccess('Xóa đơn hàng thành công');
            } else {
                return redirect()->route('dasboard')->withErrors('Đơn hàng không tồn tại');
            }
        } catch (ModelNotFoundException $e) {
            return redirect()->route('dasboard')->withErrors('Đơn hàng không tồn tại');
        }
    }







}