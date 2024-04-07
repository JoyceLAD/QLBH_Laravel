<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donhang;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Phanquyen;


class HomeController extends Controller{
    public function tkh()
    {
        $userid = Session::get('userId') -> id_tk;
        $tkh = Donhang::get_tkh($userid);
        if($tkh){
            return $tkh;
        }else {
            $tkh1 = Donhang::get_tkh1($userid);
            return $tkh1;
        }
    }
    public function tdh()
    {
        $userid = Session::get('userId') -> id_tk;
        $tdh = Donhang::get_tdh($userid);
        if($tdh){
            return $tdh;
        }else {
            $tdh1 = Donhang::get_tdh1($userid);
            return $tdh1;
        }
    }
    public function dsdh()
    {
        $userid = Session::get('userId') -> id_tk;
        // $dsdh = Donhang::get_dsdh($userid);
        // if($dsdh !== null){
        //     return $dsdh;
        // }else{
        //     $dsdh1 = Donhang::get_dsdh1($userid);
        //     return $dsdh1;
        // }
        $dsdh1  = Donhang::get_dsdh1($userid);
        if($dsdh1 == null){
            $dsdh = Donhang::get_dsdh($userid);
            return $dsdh;
        }else return $dsdh1;

    }
    public function dskh()
    {
        $userid = Session::get('userId') -> id_tk;
        // $dskh = Donhang::get_dskh($userid);
        // if($dskh!== null){
        //     return $dskh;
        // }else{
        //     $dskh1 = Donhang::get_dskh1($userid);
        //     return $dskh1;
        // }
        $dskh1  = Donhang::get_dskh1($userid);
        if($dskh1 == null){
            $dskh = Donhang::get_dskh($userid);
            return $dskh;
        }else return $dskh1;
    }
    public function username()
    {
        $userid = Session::get('userId') -> username;
        return $userid;

    }

}