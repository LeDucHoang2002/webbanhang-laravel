<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User_Permission;

class AdminController extends Controller
{
    public function showAdmin()
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
        if ($id_permission1!=1) {
            return redirect()->route('client.home');
        }else
        return view('admin.home.index');
    }

}
