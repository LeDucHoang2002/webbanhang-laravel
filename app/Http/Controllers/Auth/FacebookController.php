<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use App\Models\User_Permission;
use Illuminate\Support\Facades\Auth;
use Exception;

class FacebookController extends Controller
{
    
    public function facebookpage()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function facebookredirect()
    {
        try {
            $user = Socialite::driver('facebook')->user();
            $finduser = User::where('facebook_id', $user->id)->first();

            if($finduser) {

                $id_permission = User_Permission::where('username', $finduser->username)->value('id_permission');
                session()->put('username', $finduser->username);
                if ($id_permission == 3) {
                    return redirect()->intended('');
                } else {
                    return back()->with('fail', 'Không có quyền truy cập');
                }
            }else{
            
            $newUser = User::updateOrCreate([

            'email' => $user->email, 

            'username'=>$user->id,
            
            'account_name' => $user->name, 

            'facebook_id' => $user->id,

            'phone_number' => '0123456789', 
            
            'gender' => 'nam',

            'birth_day' => '2002-08-11',

            'password' => bcrypt('ABC12345'),

            'avt' => $user->avatar,

            'address' => '41 Cao Thắng',

          



        ]);

        $id_permission = User_Permission::where('username', $newUser->username)->value('id_permission');
        session()->put('username', $newUser->username);
        if ($id_permission == 3) {
            return redirect()->intended('');
        } else {
            return back()->with('fail', 'Không có quyền truy cập');
        }
    }
            } catch (Exception $e) {

                dd($e->getMessage());

            }

    }

    

}