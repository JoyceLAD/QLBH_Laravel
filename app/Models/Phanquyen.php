<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Hash;
use App\Models\Khachhang;
class Phanquyen extends Model
{
    protected $table = 'phanquyen';

    protected $primaryKey = 'id_pq';

    protected $fillable = [
        'id_tk1', 'id_tk2',
    ];


    public $timestamps = false;
    //case phan quyen cho nhan vien
    public static function check_duplicaterole($username)
    {
        $results = Phanquyen::join('taikhoan', 'phanquyen.id_tk2', '=', 'taikhoan.id_tk')
                        ->where('taikhoan.username', $username)
                        ->select('phanquyen.*')
                        ->get();
        if($results->isEmpty()){
            return 0;
        }else return 1;

    }
    //case phan quyen cho chu
    public static function check_roleforown($username)
    {
        $results = Phanquyen::join('taikhoan', 'phanquyen.id_tk1', '=', 'taikhoan.id_tk')
        ->where('taikhoan.username', $username)
        ->select('phanquyen.*')
        ->get();
        if($results->isEmpty()){
        return 0;
        }else return 1;

    }
    public static function addrole($id1, $id2)
    {
        $results = static::create([
            'id_tk1' => $id1,
            'id_tk2' => $id2,
        ]);
        return $results;
    }

    public static function check($id)
    {
        $result = Phanquyen::where('id_tk1', $id)
            ->select('*')
            ->get();
    
        if (!$result->isEmpty()) {
            return 1; // Chủ
        } else {
            $result1 = Phanquyen::where('id_tk2', $id)
                ->select('*')
                ->first();
    
            if ($result1 !== null) {
                return 0; // Nhân viên
            } else {
                return 2; // Không được phân quyền
            }
        }
    }
    
    public static function check_own($id)
    {
        $result = Phanquyen::where('phanquyen.id_tk2', $id)
        ->select('phanquyen.*')
        ->first();
        if($result !== null)
        {
            return $result;
        }else{
            return null;
        }
    }
    public static function listRole($id)
    {
        $result1 = Phanquyen::join('taikhoan','taikhoan.id_tk','=','phanquyen.id_tk2')
        ->where('phanquyen.id_tk1',$id)
        ->select('taikhoan.*')
        ->get();
        return $result1;        

    }


    
}
