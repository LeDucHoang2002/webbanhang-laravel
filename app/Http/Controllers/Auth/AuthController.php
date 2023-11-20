<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\User_Permission;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
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
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:255|unique:user',
            'email' => 'required|string|email|max:255|unique:user',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::create([
            'username' => $request->input('username'), // Đảm bảo rằng 'username' đã được cung cấp account_name
            'account_name' => $request->input('username'),
            'email' => $request->input('email'),
            'phone_number' => 'Chưa cập nhật',
            'gender' => 'Chưa cập nhật',
            'birth_day' => 'Chưa cập nhật',
            'address' => 'Chưa cập nhật',
            'password' => Hash::make($request->input('password')),
            'address' => 'Chưa cập nhật',
            'avt' => 'https://eitrawmaterials.eu/wp-content/uploads/2016/09/person-icon.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        $userPermission = new User_Permission();
        $userPermission->id_permission = 3;
        $userPermission->username = $user->username;
        $userPermission->save();
        return redirect()->route('login')->with('success', 'Đăng ký thành công!');
    }
    
}
