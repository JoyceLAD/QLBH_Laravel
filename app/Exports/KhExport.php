<?php

namespace App\Exports;

use App\Models\Donhang;
use App\Models\Phanquyen;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\Session;

class KhExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        $id_tk = Session::get("userId")->id_tk;
        $role = Session::get("role");
        if($role == "Nhân viên")
        {
            $id = Phanquyen::check_own($id_tk)->id_tk1;
        }else{
            $id = $id_tk;
        }
        return Donhang::join('khachhang', 'donhang.id_kh', '=', 'khachhang.id_kh')
        ->join('congty', 'khachhang.id_ct','=','congty.id_ct')
        ->where('donhang.id_tk', $id) 
        ->distinct('khachhang.id_kh')
        ->select('khachhang.*', 'congty.ten_congty')
        ->get();


    }
    //Thêm hàng tiêu đề cho bảng
    public function headings() :array {
    	return [ "Mã khách hàng", "Tên khách hàng", "Tuổi", "Địa chỉ","Mã công ty","Nghề nghiệp","Tên công ty"];
    }
}

