<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Hash;
class Congty extends Model
{
    protected $table = 'congty';

    protected $primaryKey = 'id_ct';

    protected $fillable = [
        'id_ct','ten_congty'
    ];

    public $timestamps = false;
    
}
