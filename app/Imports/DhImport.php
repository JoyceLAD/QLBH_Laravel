<?php

namespace App\Imports;

use App\Models\Donhang;
use App\Models\Khachhang;
use App\Models\Phanquyen;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class DhImport implements ToModel,WithHeadingRow
{
    public function headingRow() : int
    {
        return 1;
    }
 
    public function model(array $row)
    {
        $id_tk = Session::get("userId")->id_tk;
        $role = Session::get("role");
        if($role == "Nhân viên")
        {
            $id = Phanquyen::check_own($id_tk)->id_tk1;
        }else{
            $id = $id_tk;
        }
        $id_kh = $row['ma_khach_hang'];
        $r1 = Khachhang::where('id_kh',$id_kh)->first();
        if(!$r1){
            Log::error("Không tìm thấy công ty với mã: $id_kh");
            return null;
        }else{
            return new Donhang([
                'id_kh' => $row['ma_khach_hang'],
                'ten_donhang' => $row['ten_don_hang'],
                'id_tk' => $id,
                'ngay' => $row['ngay'],
            ]);
    
        }
    }
}
