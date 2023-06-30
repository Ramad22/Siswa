<?php

namespace App\Http\Controllers;

use Illuminate\Hashing\BcryptHasher;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function Login(){
        return view('Login');
    }
    public function Admin(){
        return view('siswa');
    }
    public function Loginproses(Request $request){
        if(Auth::attempt($request->only('email','password'),$request->remember)){
            return redirect('siswa');
        }
        return \redirect('Login');
    }

    public function Regis(){
        return view('Regis');
    }
    public function Registeruser(Request $request){
        // dd($request->all()); pengecekan
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Bcrypt($request->password),
            // 'remember_token'=> Str::random(60),
        ]);
        return redirect('/Login');
    }
    public function logout(){
        Auth::logout();
        return \redirect('Login');
    }
}
