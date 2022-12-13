<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create(){
        return view('user.create');
    }

    public function store(Request $request){
        $request->validate([
           'name' => 'required',
            'email'=>'required|email',
            'password'=>'required',
            'avatar'=>'required',

        ]);

        $avatars = $request->file('avatar')->store("images");

        $users = User::create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'password'=>Hash::make($request->input('password')),
            'avatar'=>$avatars ?? null,
        ]);

        Auth::login($users);

        return redirect('/home');
    }

    public function loginForm(){
        return view('user.login');
    }
    public function login(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);
        if (Auth::attempt([
            'email'=> $request->email,
            'password'=>$request->password,
        ])){
           return redirect('/home');
        }
        return redirect()->back();
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login.create');
    }

}
