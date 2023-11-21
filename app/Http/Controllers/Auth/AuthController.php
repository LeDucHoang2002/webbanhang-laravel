<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\User_Permission;
class AuthController extends Controller
{
    public function logout()
    {
        Auth::logout();
        session()->flush();
        return redirect()->route('login');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (auth()->attempt($credentials)) {

            $user = auth()->user();

            $id_permission = User_Permission::where('username', $user->username)->value('id_permission');
            session()->put('username', $user->username);
            if ($id_permission == 3) {
                return redirect()->intended('');
            } else {
                return back()->with('fail', 'Không có quyền truy cập');
            }
        } else {
            return back()->with('fail', 'Sai tên đăng nhập hoặc mật khẩu');
        }
    }
}
