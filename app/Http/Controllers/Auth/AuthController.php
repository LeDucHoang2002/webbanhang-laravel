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
use Illuminate\Support\Facades\Mail;
use App\Mail\VerifyEmail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;


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
    // public function register(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'username' => 'required|string|max:255|unique:user',
    //         'email' => 'required|string|email|max:255|unique:user',
    //         'password' => 'required|string|min:6|confirmed',
    //     ]);

    //     $user = User::create([
    //         'username' => $request->input('username'), // Đảm bảo rằng 'username' đã được cung cấp account_name
    //         'account_name' => $request->input('username'),
    //         'email' => $request->input('email'),
    //         'phone_number' => 'Chưa cập nhật',
    //         'gender' => 'Chưa cập nhật',
    //         'birth_day' => 'Chưa cập nhật',
    //         'address' => 'Chưa cập nhật',
    //         'password' => Hash::make($request->input('password')),
    //         'address' => 'Chưa cập nhật',
    //         'avt' => 'https://eitrawmaterials.eu/wp-content/uploads/2016/09/person-icon.png',
    //         'created_at' => Carbon::now(),
    //         'updated_at' => Carbon::now()
    //     ]);
    //     $userPermission = new User_Permission();
    //     $userPermission->id_permission = 3;
    //     $userPermission->username = $user->username;
    //     $userPermission->save();
    //     return redirect()->route('login')->with('success', 'Đăng ký thành công!');
    // }
    // public function register(Request $request)
    // {
    //     $request->validate([
    //         'username' => 'required|string|max:255',
    //         'email' => 'required|string|email|unique:user|max:255',
    //         'password' => 'required|string|min:8|confirmed',
    //     ]);

    //     $user = User::create([
    //         'username' => $request->username,
    //         'account_name' => $request->username,
    //         'email' => $request->email,
    //         'password' => bcrypt($request->password),
    //         'avt' => 'https://eitrawmaterials.eu/wp-content/uploads/2016/09/person-icon.png',
    //         'email_verification_token' => Str::random(60),
    //     ]);

    //     // Gửi email xác thực
    //     $this->sendVerificationEmail($user);

    //     Log::info('Email sent successfully');
    //     return view('emails.verify-email')->with('success', 'Đăng ký thành công. Vui lòng kiểm tra email để xác thực tài khoản.');
    // }

    // protected function sendVerificationEmail($user)
    // {
    //     Mail::to($user->email)->send(new VerifyEmail($user));
    // }
    // public function verifyEmail($token)
    // {
    //     $user = User::where('email_verification_token', $token)->first();

    //     if ($user) {
    //         $user->email_verified = true;
    //         $user->email_verification_token = null;
    //         $user->save();

    //         return view('emails.verify-email')->with('success', 'Xác thực email thành công. Bạn có thể đăng nhập.');
    //     }

    //     return redirect()->route('login')->with('error', 'Link xác thực không hợp lệ.');
    // }
    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|unique:user|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'username' => $request->username,
            'account_name' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'avt' => 'https://eitrawmaterials.eu/wp-content/uploads/2016/09/person-icon.png',
            'email_verification_token' => Str::random(60),
        ]);
        $userPermission = new User_Permission();
        $userPermission->id_permission = 3;
        $userPermission->username = $user->username;
        $userPermission->save();
        Mail::to($user->email)->send(new VerifyEmail($user));

        Log::info('Email sent successfully');
        return redirect()->route('verify.email.custom')->with('success', 'Đăng ký thành công. Vui lòng kiểm tra email để xác thực tài khoản.');
    }

    public function verifyEmail($token)
    {
        // Tìm người dùng theo token
        $user = User::where('email_verification_token', $token)->first();

        // Kiểm tra xem người dùng có tồn tại không và email chưa được xác thực
        if ($user && !$user->email_verified) {
            // Cập nhật thông tin người dùng
            $user->email_verified = true;
            $user->email_verification_token = null;
            $user->save();

            return redirect()->route('verify.email.custom')->with('success', 'Xác thực email thành công. Bạn có thể <a href="' . route('login') . '">Đăng nhập ngay</a>.');
        }

        return redirect()->route('verify.email.custom')->with('error', 'Link xác thực không hợp lệ hoặc email đã được xác thực.');
    }
}
