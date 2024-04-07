<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\select;

class Account extends Model
{
    protected $table = 'taikhoan';

    protected $primaryKey = 'id_tk';

    protected $fillable = [
        'username', 'password', 'ten',
    ];

    protected $hidden = [
        'password',
    ];

    public function getAuthPassword()
    {
        return $this->password;
    }
    public $timestamps = false;
    public static function attempt($credentials)
    {
        $user = static::where('username', $credentials['username'])->first();  
        if (!$user) {
            return false;
        }

        if (Hash::check($credentials['password'], $user->password)) {
            // Mật khẩu đúng
            return $user;
        }
        return false; // Sai mật khẩu
    }

    public static function getId($username)
    {
        $id = static::where('username', $username)
        ->select('taikhoan.id_tk')
        ->first();
        if($id !== null){
            return $id -> id_tk;
        }else {
            return null;
        }

    }
}
