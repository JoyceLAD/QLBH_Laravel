<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Hash;
class Khachhang extends Model
{
    protected $table = 'khachhang';

    protected $primaryKey = 'id_kh';

    protected $fillable = [
        'ten', 'tuoi', 'dia_chi','id_ct','nghe_nghiep'
    ];

    public $timestamps = false;
    public static function detailkh($id)
    {
        $results1 = DonHang::join('khachhang', 'donhang.id_kh', '=', 'khachhang.id_kh')
        ->join('congty', 'khachhang.id_ct','=','congty.id_ct')
        ->where('donhang.id_kh', $id)
        ->count();
        $results2 = Khachhang::where('khachhang.id_kh', $id)
        ->join('congty', 'khachhang.id_ct','=','congty.id_ct')
        ->select('khachhang.*','congty.ten_congty')
        ->get();
        $results3 = DonHang::join('khachhang', 'donhang.id_kh', '=', 'khachhang.id_kh')
        ->join('congty', 'khachhang.id_ct','=','congty.id_ct')
        ->where('donhang.id_kh', $id)
        ->select('donhang.*',)
        ->orderByDesc('donhang.ngay')
        ->take(10)
        ->get();       
        return [
            'count'=>$results1,
            'kh'=>$results2,
            'listdh'=>$results3
        ];
        }

    
}
