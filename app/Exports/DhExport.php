<?php

namespace App\Exports;

use App\Models\Donhang;
use App\Models\Phanquyen;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\Session;

class DhExport implements FromCollection, WithHeadings
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
        return Donhang::where('id_tk','=',$id)
        ->select('id_dh','id_kh','ten_donhang','ngay')->get();

    }
    //Thêm hàng tiêu đề cho bảng
    public function headings() :array {
    	return [ "Mã đơn hàng", "Mã khách hàng", "Tên đơn hàng", "Ngày"];
    }
}

