<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;
use App\Models\User_Permission;

class clientMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $id_permission1=0;
        $username = session('username');
            if (session()->has('username')) {
                $username = session('username');
            
                $userPermission = User_Permission::where('username', $username)->first();
        
                if ($userPermission) {
                    $id_permission1 = $userPermission->id_permission;
                }
            }
            if ($id_permission1!=3 && $id_permission1!=0) {
                return redirect()->route('Admin');
            }else
        
        return $next($request);
    }
}
