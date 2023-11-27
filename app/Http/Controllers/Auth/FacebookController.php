<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use App\Models\User_Permission;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Exception;

class FacebookController extends Controller
{
    
    public function facebookpage()
    {
        return Socialite::driver('facebook')->with(['prompt' => 'select_account'])->redirect();
    }

    public function facebookredirect()
    {
        try {
            $facebook_user = Socialite::driver('facebook')->user();
            $user = User::where('facebook_id', $facebook_user->getId())->first();
            
            $emailParts = explode('@', $facebook_user->getEmail());

            if (!$user) {
                $new_user = User::create([
                    'username' => $emailParts[0],
                    'account_name' => $facebook_user->getName(),
                    'email' => $facebook_user->getEmail(),
                    'address' => 'Chưa cập nhật',
                    'phone_number' => 'Chưa cập nhật',  
                    'password' => 'ABC12345', 
                    'birth_day' => '2002-08-11',
                    'phone_number' => '0912768911',                
                    'avt' => $facebook_user->getAvatar(),
                    'facebook_id' => $facebook_user->getId(),                
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