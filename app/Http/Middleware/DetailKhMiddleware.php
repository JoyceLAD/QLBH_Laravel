<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;
use App\Models\Donhang;

class DetailKhMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //$userid = Session::get('userId') -> id_tk;
        //$userid = $request->user()->id_tk;
        $id = $request->route('id');
        $result = Donhang::check_detailkh($id);
        //Session::put('t',$result);
        if($result == null)
        {
            return redirect("dasboard")->with('error','Bạn không có khách hàng này');
        }
        return $next($request);

    }
}


