<?php

namespace App\Imports;

use App\Models\Congty;
use App\Models\Donhang;
use App\Models\Khachhang;
use App\Models\Phanquyen;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Session;

class KhImport implements ToModel,WithHeadingRow
{
    public function headingRow() : int
    {
        return 1;
    }
    
 
    public function model(array $row)
    {
        $id_ct = $row['ma_cong_ty'];

        $congty = Congty::where('id_ct', $id_ct)->first();

        if (!$congty){
            Log::error("Không tìm thấy công ty với mã: $id_ct");

            return null;        
        }else{
            return new Khachhang([
                'ten' => $row['ten_khach_hang'],
                'tuoi' => $row['tuoi'],
                'dia_chi' => $row['dia_chi'],
                'id_ct' => $row['ma_cong_ty'],
                'nghe_nghiep' => $row['nghe_nghiep'],
    
            ]);
    
        }
    }
}
