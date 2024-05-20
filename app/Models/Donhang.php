<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Hash;
use App\Models\Khachhang;
use App\Models\Phanquyen;
use Illuminate\Support\Facades\Session;

class Donhang extends Model
{
    protected $table = 'donhang';

    protected $primaryKey = 'id_dh';

    protected $fillable = [
        'id_kh', 'id_tk', 'ten_donhang','ngay'
    ];


    public $timestamps = false;
    //tinh tkh voi chu
    public static function get_tkh($id){
        $count = static::where('id_tk', $id)->distinct()->count('id_kh');
        if($count >0){
            return $count;
        }else{
            return 0;
        }
    }
    //tinh tkh voi nhan vien
    public static function get_tkh1($id){
        $result = Phanquyen::where('id_tk2', $id)->first();
    
        if ($result!==null) {
            $id_chu = $result->id_tk1;
    
            return static::get_tkh($id_chu);
        } else {
            return null;
        }
    }
    
    //Tinh tdh voi chu
    public static function get_tdh($id){
        $count = static::where('id_tk', $id)->count();
        if($count >0){
            return $count;
        }else{
            return 0;
        }
    }
    //Tinh tdh voi nhan vien
    public static function get_tdh1($id){
        $result = Phanquyen::where('id_tk2', $id)->first();
        if ($result!==null) {
            $id_chu = $result->id_tk1;
    
            return static::get_tdh($id_chu);
        } else {
            return null;
        }
    }
    // Lấy danh sách đơn hàng của chủ
    public static function get_dsdh($id){
        $dsdh = Donhang::where('id_tk', $id)
        ->orderBy('ngay','desc')
        ->take(10)
        ->get();
        return $dsdh;
    }

    // Lấy danh sách đơn hàng của nhân viên
    public static function get_dsdh1($id){
        $result = Phanquyen::where('id_tk2', $id)->first();
        if ($result!==null) {
            $id_chu = $result->id_tk1;
            $dsdh1 = Donhang::get_dsdh($id_chu)
            ;
            return $dsdh1;
        } else {
            return null;
        }
    }

    // Lấy danh sách khách hàng của chủ
    public static function get_dskh($id) {
        $results = DonHang::join('khachhang', 'donhang.id_kh', '=', 'khachhang.id_kh')
                        ->join('congty', 'khachhang.id_ct','=','congty.id_ct')
                        ->where('donhang.id_tk', $id)
                        ->select('khachhang.id_kh', 'khachhang.ten', 'khachhang.tuoi', 'khachhang.dia_chi', 'congty.ten_congty')                        
                        ->distinct('khachhang.id_kh')
                        ->take(10)
                        ->get();
        return $results;
    }

    // Lấy danh sách khách hàng của nhân viên
    public static function get_dskh1($id) {
        $result = Phanquyen::where('id_tk2', $id)->first();
        if ($result!==null) {
            $id_chu = $result->id_tk1;
            $dskh1 = Donhang::get_dskh($id_chu);
            return $dskh1;
        } else {
            return null;
        }
    }
    public static function find($id_dh, $id_tk) {
        $result = Donhang::where('id_dh', $id_dh)
        ->where('id_tk', $id_tk)
        ->select('*')
        ->first();
         return $result;
    }

    public static function check_dh($username)
    {
        $results = Donhang::join('taikhoan', 'donhang.id_tk', '=', 'taikhoan.id_tk')
        ->where('taikhoan.username', $username)
        ->select('donhang.*')
        ->get();
        if($results->isEmpty()){
        return 0;
        }else return 1;
    }
    public static function check_detailkh($id)
    {
        $userid = Session::get('userId') -> id_tk;
        $result = Donhang::where('id_tk',$userid)
        ->where('id_kh',$id)
        ->first();
        return $result;
    }


}
