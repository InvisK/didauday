<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Validator;
use App\Http\Requests;
use Socialize;
use App\User;
use DB;
use Auth;
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
        $name = $user->getName();

        $users = new User();
        $users_search = DB::table('users')->where('email','=', $email)->get();

        if($users_search==null){
            $users->name = $name;
            $users->email = $email;
            $users->password = bcrypt('');
            $users->avatar = $user->getAvatar();
            $users->save();
            if(Auth::attempt(['email' => $email,'password' => ''])){
                return redirect('/');
            }
        }else{
            if(Auth::attempt(['email' => $email,'password' => ''])){
                return redirect('/');
            }
        }
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
