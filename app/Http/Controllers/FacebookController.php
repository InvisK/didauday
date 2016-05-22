<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Socialize;
class FacebookController extends Controller
{
    public function login()
    {
        return Socialize::with('facebook')->redirect();
    }

    public function callback()
    {
        $user = Socialize::with('facebook')->user();
        //$user chi moi la thong tin lay ve tu facebook, insert vao co so du lieu
        //sau do login = laravel
        $email = $user->getEmail();
        $users = User::select('id','name','email')->where('email','=',$email)->get();
        if($users == null){
            $userInsert = new User();
            $userInsert->name = $user->getName();
            $userInsert->email = $email;
            $userInsert->save();
        }
        return redirect('/');
        //redirect o day
    }
}
