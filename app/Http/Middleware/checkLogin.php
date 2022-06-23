<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkLogin
{
    public function handle(Request $request, Closure $next)
    {
        if (!session()->get('admin_id')) {
            return redirect('admin/login')->with(["message"=>"Anda Belum Masuk"]);
        }
        return $next($request);
    }
}
