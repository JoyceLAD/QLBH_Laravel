<?php

namespace App\Http\Controllers;
class NotifyController extends Controller
{
    public function getErrorSession()
    {
        $error = session('error');
        echo $error;
    }

}
