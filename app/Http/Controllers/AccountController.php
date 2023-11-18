<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Models\User;


class AccountController extends Controller
{
    public function index(){
        return view('accuont');
    }

    public function login(){
        if(Auth::check()){
            return redirect(route("user.Account"));
        }

        return view('login');
    }

    public function register(){
        if(Auth::check()){
            return redirect(route("user.Account"));
        }
        return view('register');
    }

    public function login_post(Request $request){
        if(Auth::check()){
            return redirect(route("user.Account"));
        }

        return view('register');
    }

    public function register_post(Request $request){
        
        return $request;


        $user = User::create( $request);
        if($user){
            Auth::login($user);
           
            return redirect(route('user.Account'));
        }
        
        return redirect(reute('user.login'))->withErrors(['formError' => 'Error']);
    }

}
