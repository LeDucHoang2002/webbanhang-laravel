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

    

    public function showPassword()
    {
        return view('client.profile.password');
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
