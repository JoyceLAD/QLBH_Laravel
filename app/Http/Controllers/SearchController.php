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

class SearchController extends Controller
{
    public function getSearchdh()
    {
        return view('searchdh');
    }
    public function postSearchdh(Request $request)
    {
        $id_tk = Session::get("userId")->id_tk;
        $role = Session::get("role");
        if($role == "Nhân viên")
        {
            $id = Phanquyen::check_own($id_tk)->id_tk1;
        }else{
            $id = $id_tk;
        }
        if($request->get('query'))
        {
            $query = $request->get('query');
            $data = Donhang::join('khachhang', 'donhang.id_kh', '=', 'khachhang.id_kh')
            ->join('congty', 'khachhang.id_ct','=','congty.id_ct')
            ->where('donhang.id_tk', $id) 
            ->where(function($q) use ($query) {
                $q->where('donhang.id_dh', 'LIKE', "%{$query}%")
                      ->orWhere('donhang.id_kh', 'LIKE', "%{$query}%")
                      ->orWhere('donhang.ten_donhang', 'LIKE', "%{$query}%")
                      ->orWhere('khachhang.ten', 'LIKE', "%{$query}%")
                      ->orWhere('congty.ten_congty', 'LIKE', "%{$query}%");
            })
            ->select('khachhang.*', 'congty.*', 'donhang.*')
            ->get();
            echo $data;
            // echo $id;
       }    
    }
    public function getSearchkh()
    {
        return view('searchkh');
    }
    public function postSearchkh(Request $request)
    {
        $id_tk = Session::get("userId")->id_tk;
        $role = Session::get("role");
        if($role == "Nhân viên")
        {
            $id = Phanquyen::check_own($id_tk)->id_tk1;
        }else{
            $id = $id_tk;
        }
        if($request->get('query'))
        {
            $query = $request->get('query');
            $data = Donhang::join('khachhang', 'donhang.id_kh', '=', 'khachhang.id_kh')
            ->join('congty', 'khachhang.id_ct','=','congty.id_ct')
            ->where('donhang.id_tk', $id) 
            ->where(function($q) use ($query) {
                $q->where('khachhang.id_kh', 'LIKE', "%{$query}%")
                      ->orWhere('khachhang.id_ct', 'LIKE', "%{$query}%")
                      ->orWhere('khachhang.tuoi', 'LIKE', "%{$query}%")
                      ->orWhere('khachhang.ten', 'LIKE', "%{$query}%")
                      ->orWhere('congty.ten_congty', 'LIKE', "%{$query}%");
            })
            ->distinct('khachhang.id_kh')
            ->select('khachhang.*', 'congty.*')
            ->get();
            echo $data;
            // echo $id;
       }    
    }


}