<?php

namespace App\Http\Controllers;

use App\Models\AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){

        return  view('auth.login');
    }

    public function register(){

        return view('auth.register');
    }

    public function registerPost(Request $request){

        $request->validate([

            'name'=>'required',
            'email'=>'required|email|unique:auth_users',
            'password'=>'required|confirmed',
        ]);

        AuthUser::create([

            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),

        ]);

        return redirect()->route('vehicule.index');

    }

    public function loginPost(Request $request){
        $users = AuthUser::where('email', $request->email)->first();
        if($users != null){
            if(Hash::check($request->password, $users->password)){
                $request->session()->put('admin', $users);
                return redirect()->route('vehicule.index');
            }else{

                return ['password incorect'];
            }
       }else{
           echo 'email incorrect';
       }

    }

    public function logout(Request $request){

        if($request->session()->has('admin')){

            $request->session()->forget('admin');
            return redirect()->route('vehicule.index');
        }
    }










}
