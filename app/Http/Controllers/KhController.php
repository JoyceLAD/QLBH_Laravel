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
            'tuoi' => 'required|integer',
            'dia_chi' => 'required',
            'id_ct' => 'required',
            'nghe_nghiep' => 'required',
        ],[
            'ten.required' => 'Thiếu tên',
            'tuoi.required' => 'Thiếu tuổi',
            'dia_chi.required' => 'Thiếu địa chỉ',
            'id_ct.required' => 'Thiếu mã công ty',
            'nghe_nghiep.required' => 'Thiếu nghề nghiệp',
            'tuoi.integer' => 'Tuổi cần là số nguyên',

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
                return redirect()->route('getaddkh')->with('error','Thêm khách hàng không thành công');
            }
        } catch (ModelNotFoundException $e) {
            return redirect()->route('getaddkh')->with('error','Công ty không tồn tại');
        }        

    }
    public  function postdeletekh(Request $request)
    {
        $request -> validate([
            'id_kh' => 'required',
        ],[
            'id_kh.required' => 'Thiếu mã khách hàng',

        ]);
        $id_kh = $request->input('id_kh');
        try {
            $company = Khachhang::findOrFail($id_kh);
            $company->delete();
            return redirect()->route('getdeletekh')->withSuccess('Xóa khách hàng thành công');
        } catch (ModelNotFoundException $e) {
            return redirect()->route('getdeletekh')->with('error','Khách hàng không tồn tại');
        }        
    }
    public  function postupdatekh(Request $request)
    {
        $request -> validate([
            'id_kh'=>'required',
            'ten' => 'required',
            'tuoi' => 'required|integer',
            'dia_chi' => 'required',
            'id_ct' => 'required',
            'nghe_nghiep' => 'required',
        ],[
            'id_kh.required' => 'Thiếu mã khách hàng',
            'ten.required' => 'Thiếu tên',
            'tuoi.required' => 'Thiếu tuổi',
            'dia_chi.required' => 'Thiếu địa chỉ',
            'id_ct.required' => 'Thiếu mã công ty',
            'nghe_nghiep.required' => 'Thiếu nghề nghiệp',
            'tuoi.integer' => 'Tuổi cần là số nguyên',


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
                return redirect()->route('getupdatekh')->with('error','Công ty không tồn tại');
            }  
        } catch (ModelNotFoundException $e) {
            return redirect()->route('getupdatekh')->with('error','Khách hàng không tồn tại');
        }        
    }
    public  function postupdatekh_home(Request $request)
    {
        $request -> validate([
            'id_kh'=>'required',
            'ten' => 'required',
            'tuoi' => 'required|integer',
            'dia_chi' => 'required',
            'id_ct' => 'required',
            'nghe_nghiep' => 'required',
        ],[
            'id_kh.required' => 'Thiếu mã khách hàng',
            'ten.required' => 'Thiếu tên',
            'tuoi.required' => 'Thiếu tuổi',
            'dia_chi.required' => 'Thiếu địa chỉ',
            'id_ct.required' => 'Thiếu mã công ty',
            'nghe_nghiep.required' => 'Thiếu nghề nghiệp',
            'tuoi.integer' => 'Tuổi cần là số nguyên',

        ]);
        $id_kh = $request->input('id_kh');
        $id_ct = $request->input('id_ct');
        try {
            $kh = Khachhang::findOrFail($id_kh);
            try{
                $ct = Congty::findOrFail($id_ct);
                $kh->update($request->all());
                return redirect()->route('dasboard')->withSuccess('Chỉnh sửa khách hàng thành công');
    
            }catch (ModelNotFoundException $e) {
                return redirect()->route('dasboard')->with('error','Công ty không tồn tại');
            }  
        } catch (ModelNotFoundException $e) {
            return redirect()->route('dasboard')->with('error','Khách hàng không tồn tại');
        }        
    }

    public  function postdeletekh_home(Request $request)
    {
        $request -> validate([
            'id_kh' => 'required',
        ],[
            'id_kh.required' => 'Thiếu mã khách hàng',

        ]);
        $id_kh = $request->input('id_kh');
        try {
            $company = Khachhang::findOrFail($id_kh);
            $company->delete();
            return redirect()->route('dasboard')->withSuccess('Xóa khách hàng thành công');
        } catch (ModelNotFoundException $e) {
            return redirect()->route('dasboard')->with('error','Khách hàng không tồn tại');
        }        
    }
    public function detailkh($id)
    {
        $userid = Session::get('userId');
        if($userid != null)
        {
            $result = Khachhang::detailkh($id);
            return view('detailkh')->with('result', $result);    
        }else
        {
            return redirect("login")->with('error','Bạn cần đăng nhập trước');
        }
    }




}