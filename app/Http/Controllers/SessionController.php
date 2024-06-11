<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class SessionController extends Controller
{
    
    public function index(){
        return view('sesi/login');
        // $data = User::orderBy('name')->get();
    }
    
    public function login(Request $request){
        //dd($request->all());
        Session::flash('name', $request->name);
        $request->validate([
            'name' => 'required',
            'password' => 'required'
        ],[
            'name.required'=>'name harus diisi',
            'password.required'=>'Password harus diisi'
    ]);
    $credentials = $request->only('name', 'password');

    if (Auth::attempt($credentials)) {
        return redirect('/index')->with('success', 'Login Berhasil!');
    } else {
        return redirect()->back()->with('errors','Username atau Password Salah!');
    }

    }

    public function logout(){
        Auth::logout();
        return redirect('/login')->with('success','Logout Berhasil !');
    }
}
