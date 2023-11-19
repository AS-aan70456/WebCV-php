<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Models\User;


class AccountController extends Controller
{
    public function index(){

        $user = Auth::user();

        return view('accuont', compact('user'));
    }

    public function login(){
        if(Auth::check()){
            return redirect('/Account');
        }

        return view('login');
    }

    public function register(){
        if(Auth::check()){
            return redirect('/Account');
        }
        return view('register');
    }

    public function login_post(Request $request){
        if(Auth::check()){
            return redirect('/Account');
        }

        return view('register');
    }

    public function register_post(Request $request){
        
        $arr = [ 
            'Name' => $request->Name,
            'Password' => $request->Password,
            'Email' => $request->Email,
            'remember_token' => $request->_token,

        ];
        
        



        $user = User::create($arr);
        if($user){
            Auth::login($user);
           
            return redirect('/Account');
        }
        
        return redirect(reute('user.login'))->withErrors(['formError' => 'Error']);
    }

}
