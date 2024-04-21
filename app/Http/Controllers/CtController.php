<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;
use App\Models\Phanquyen;
use App\Models\Congty;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CtController extends Controller
{
    public function getaddcty()
    {
        if (Session::has('userId')) {
            return view('addcty');
        }
        return redirect("login")->withErrors('Bạn cần đăng nhập trước');
    }
    public  function postaddcty(Request $request)
    {
        $request -> validate([
            'ten_congty' => 'required',
        ]);
        $ten_congty = $request ->input('ten_congty');
        $result = Congty::create([
            'ten_congty' => $ten_congty,
        ]);
        if($result !== null)
        {
            return redirect()->route('getaddcty')->withSuccess('Thêm công ty thành công với mã công ty là: '.$result->id_ct);

        }else {
            return redirect()->route('getaddcty')->with('error','Thêm công ty không thành công');
        }
    }
    public function getdeletecty()
    {
        if (Session::has('userId')) {
            return view('deletecty');
        }
        return redirect("login")->with('error','Bạn cần đăng nhập trước');
    }

    public  function postdeletecty(Request $request)
    {
        $request -> validate([
            'id_ct' => 'required',
        ]);
        $id_ct = $request->input('id_ct');
        try {
            $company = Congty::findOrFail($id_ct);
            $company->delete();
            return redirect()->route('getdeletecty')->withSuccess('Xóa công ty thành công');
        } catch (ModelNotFoundException $e) {
            return redirect()->route('getdeletecty')->with('error','Công ty không tồn tại');
        }        
    }
    public function getupdatecty()
    {
        if (Session::has('userId')) {
            return view('updatecty');
        }
        return redirect("login")->withErrors('Bạn cần đăng nhập trước');
    }

    public  function postupdatecty(Request $request)
    {
        $request -> validate([
            'id_ct' => 'required',
            'ten_congty'=>'required',
        ]);
        $id_ct = $request->input('id_ct');
        $ten_congty = $request->input('ten_congty');

        try {
            $company = Congty::findOrFail($id_ct);
            $company->update($request->all());
            return redirect()->route('getupdatecty')->withSuccess('Chỉnh sửa công ty thành công');
        } catch (ModelNotFoundException $e) {
            return redirect()->route('getupdatecty')->with('error','Công ty không tồn tại');
        }        
    }

}
