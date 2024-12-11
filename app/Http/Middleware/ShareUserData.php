<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class ShareUserData
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
         // Kiểm tra xem người dùng đã đăng nhập hay chưa
         if (Auth::check()) {
            // Lấy thông tin người dùng và chia sẻ với tất cả các view
            view()->share('user', Auth::user());
        }

        return $next($request);
    }
}
