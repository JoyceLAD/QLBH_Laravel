<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;
use App\Models\Phanquyen;
use App\Models\Congty;
use App\Models\Khachhang;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class KhController extends Controller
{
    public function getaddkh()
    {
        $id = Session::get('userId')->id_tk;
        if ($id !== null) {
            $result = Phanquyen::check($id);
            //chu
            if($result == 1)
            {
                return view('addkh')->with('RoleMessage','Tài khoản hiện tại đang làm chủ');
            }else if($result == 0){
                return view('addkh')->with('RoleMessage','Tài khoản hiện tại đang làm nhân viên');
            }else{
                return view('addkh')->with('RoleMessage','Tài khoản hiện tại chưa được phân quyền');
            }

        }
        return redirect("login")->withErrors('Bạn cần đăng nhập trước');
    }
    public function getdeletekh()
    {
        $id = Session::get('userId')->id_tk;
        if ($id !== null) {
            $result = Phanquyen::check($id);
            //chu
            if($result == 1)
            {
                return view('deletekh')->with('RoleMessage','Tài khoản hiện tại đang làm chủ');
            }else if($result == 0){
                return view('deletekh')->with('RoleMessage','Tài khoản hiện tại đang làm nhân viên');
            }else{
                return view('deletekh')->with('RoleMessage','Tài khoản hiện tại chưa được phân quyền');
            }

        }
        return redirect("login")->withErrors('Bạn cần đăng nhập trước');
    }
    public function getupdatekh()
    {
        $id = Session::get('userId')->id_tk;
        if ($id !== null) {
            $result = Phanquyen::check($id);
            //chu
            if($result == 1)
            {
                return view('updatekh')->with('RoleMessage','Tài khoản hiện tại đang làm chủ');
            }else if($result == 0){
                return view('updatekh')->with('RoleMessage','Tài khoản hiện tại đang làm nhân viên');
            }else{
                return view('updatekh')->with('RoleMessage','Tài khoản hiện tại chưa được phân quyền');
            }

        }
        return redirect("login")->withErrors('Bạn cần đăng nhập trước');
    }



    public  function postaddkh(Request $request)
    {
        $request -> validate([
            'ten' => 'required',
            'tuoi' => 'required',
            'dia_chi' => 'required',
            'id_ct' => 'required',
            'nghe_nghiep' => 'required',
        ]);
        $data = $request ->all();
        $id_ct = $request ->input('id_ct');
        try {
            $ct = Congty::findOrFail($id_ct);
            $result = Khachhang::create($data);
            if($result !== null)
            {
                return redirect()->route('getaddkh')->withSuccess('Thêm khách thành công với mã khách hàng là: '.$result->id_kh);
    
            }else {
                return redirect()->route('getaddkh')->withErrors('Thêm khách hàng không thành công');
            }
        } catch (ModelNotFoundException $e) {
            return redirect()->route('getaddkh')->withErrors('Công ty không tồn tại');
        }        

    }
    public  function postdeletekh(Request $request)
    {
        $request -> validate([
            'id_kh' => 'required',
        ]);
        $id_kh = $request->input('id_kh');
        try {
            $company = Khachhang::findOrFail($id_kh);
            $company->delete();
            return redirect()->route('getdeletekh')->withSuccess('Xóa khách hàng thành công');
        } catch (ModelNotFoundException $e) {
            return redirect()->route('getdeletekh')->withErrors('Khách hàng không tồn tại');
        }        
    }
    public  function postupdatekh(Request $request)
    {
        $request -> validate([
            'id_kh'=>'required',
            'ten' => 'required',
            'tuoi' => 'required',
            'dia_chi' => 'required',
            'id_ct' => 'required',
            'nghe_nghiep' => 'required',
        ]);
        $id_kh = $request->input('id_kh');
        $id_ct = $request->input('id_ct');
        try {
            $kh = Khachhang::findOrFail($id_kh);
            try{
                $ct = Congty::findOrFail($id_ct);
                $kh->update($request->all());
                return redirect()->route('getupdatekh')->withSuccess('Chỉnh sửa khách hàng thành công');
    
            }catch (ModelNotFoundException $e) {
                return redirect()->route('getupdatekh')->withErrors('Công ty không tồn tại');
            }  
        } catch (ModelNotFoundException $e) {
            return redirect()->route('getupdatekh')->withErrors('Khách hàng không tồn tại');
        }        
    }






}