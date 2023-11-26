<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\User_Permission;
use Laravel\Socialite\Facades\Socialite;
use Carbon\Carbon;

class GoogleAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->with(['prompt' => 'select_account'])->redirect();
    }

    public function callbackGoogle()
    {
        try {
            $google_user = Socialite::driver('google')->user();
            $user = User::where('google_id', $google_user->getId())->first();
            
            $emailParts = explode('@', $google_user->getEmail());

            if (!$user) {
                $new_user = User::create([
                    'username' => $emailParts[0],
                    'account_name' => $google_user->getName(),
                    'email' => $google_user->getEmail(),
                    'address' => 'Chưa cập nhật',
                    'phone_number' => 'Chưa cập nhật',  
                    'password' => 'ABC12345', 
                    'birth_day' => '2002-08-11',
                    'phone_number' => '0912768911',                
                    'avt' => $google_user->getAvatar(),
                    'google_id' => $google_user->getId(),                
                    'email_verified' => '1',  
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ]);

                $userPermission = new User_Permission();
                $userPermission->id_permission = 3;
                $userPermission->username = $new_user->username;
                $userPermission->save();

                session()->put('username', $new_user->username);
            } else {            
                session()->put('username', $user->username);
            }
            return redirect('');
        } catch (\Throwable $th) {
            dd('Something went wrong!' . $th->getMessage());
        }
    }

}
