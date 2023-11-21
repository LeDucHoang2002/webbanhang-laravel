<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class UserProfileController extends Controller
{
    public function showProfile()
    {
        
       $username = session('username');
       if (!$username) {
           return redirect()->route('error.page')->with('error', 'Username not found in session.');
       }

       $user = User::where('username', $username)->first();

       if (!$user) {
           return redirect()->route('error.page')->with('error', 'User not found.');
       }
        return view('client.profile.profile',[
            'user'=>$user,
        ]);
    }

    public function updateProfile(Request $request)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:255',
            'accountName' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'gender' => 'in:nam,nữ,Khác',
            'birthdate' => 'required|date',
            'upload' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Max size 2MB
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $newUsername = $request->input('username');
        $existingUser = User::where('username', $newUsername)->first();

        if ($existingUser && $existingUser->username !== session('username')) {
            return redirect()
            ->back()
            ->withErrors(['username' => $existingUser->username . ' đã tồn tại'])
            ->withInput();

        }

        $user = User::where('username', session('username'))->first();

        if (!$user) {
            
            return redirect()->route('error.page')->with('error', 'User not found.');
        }

        
        $user->username = $newUsername; 
        $user->account_name = $request->input('accountName');
        $user->email = $request->input('email');
        $user->phone_number = $request->input('phone');
        $user->gender = $request->input('gender');
        $user->birth_day = $request->input('birthdate');

        if ($request->hasFile('upload')) {
            $imagePath = $request->file('upload')->store('profile_images', 'public');
            $user->avt = Storage::url($imagePath);
        }

        $user->save();

        return redirect()->route('profile')->with('success', 'Cập nhật thông tin thành công.');
    }

    public function showPassword()
    {
        return view('client.profile.password');
    }

    public function updatePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'pass_old' => 'required|string|min:8',
            'pass_new' => 'required|string|min:8|different:pass_old',
            'pass_new_confirm' => 'required|string|min:8|same:pass_new',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::where('username', session('username'))->first();

        if (!$user || !Hash::check($request->input('pass_old'), $user->password)) {
            return redirect()
            ->back()
            ->withErrors(['Mật khẩu không đúng.'])
            ->withInput();
        }

        $user->password = Hash::make($request->input('pass_new'));
        $user->save();

        return redirect()->route('password')->with('success', 'Cập nhật mật khẩu thành công.');
    }

    public function showView()
    {
        return view('client.profile.view');
    }

    public function showSettings()
    {
        return view('client.profile.settings');
    }

}
