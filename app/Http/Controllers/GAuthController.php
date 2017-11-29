<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Socialite;
use Auth;
use App\User;

class GAuthController extends Controller
{
    public function redirectToProvider()
    {
    	//Enviar usuario a google
    	return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback()
    {
    	//Google devuelve el estado
    	$user = Socialite::driver('google')->user();


        $userID = User::where('acc_id', $user->getId())->first();

        if (!$userID) {
            $data = [
                'acc_id' => $user->getId(),
                'email' => $user->getEmail(),
                'nick' => $user->getNickname(),
                'name' => $user->getName(),
                'avatar' => $user->getAvatar(),
                'password' => 'Google',
             ];
             Auth::login(User::firstOrCreate($data));
        } else {
            
            Auth::login(User::where('acc_id', $user->getId())->first());
        }


    	

    	
    	return redirect()->to('/home');
    }
}
