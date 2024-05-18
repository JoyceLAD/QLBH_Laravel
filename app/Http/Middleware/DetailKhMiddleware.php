<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;
use App\Models\Donhang;
use App\Models\Phanquyen;

class DetailKhMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $userid = Session::get('userId') -> id_tk;
        //$userid = $request->user()->id_tk;
        $id = $request->route('id');
        $role = Session::get('role');
        if($role == 'Nhân viên')
        {
            $id_chu = Phanquyen::check_own($userid) ->id_tk1;
            $result = Phanquyen::checkpqmiddle($id_chu, $id);
            if($result == null)
            {
                return redirect("dasboard")->with('error','Chủ của bạn không có khách hàng này');
            }else
            {
                return $next($request);
            }
        }else
        {
            $result = Phanquyen::checkpqmiddle($userid, $id);
            if($result == null)
            {
                return redirect("dasboard")->with('error','Bạn không có khách hàng này');
            }else
            {
                return $next($request);
            }
        }

    }
}


