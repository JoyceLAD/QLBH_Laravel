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
    
}
