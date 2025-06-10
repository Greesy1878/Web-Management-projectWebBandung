<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class SessionController extends Controller
{
    function index(){
        return view("sesi/index");
    }

    function login(Request $request){
        Session::flash('email', $request->email);

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ],[
            'email.required' => 'Email Wajib Di Isi',
            'email.email' => 'Format Email Tidak Valid',
            'password.required' => 'Password Wajib Di Isi',
            'password.min' => 'Password minimal 6 karakter',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($infologin)) {
            // Kalau auth sukses
            return redirect('/')->with('success','Berhasil Login'); // Ganti dengan redirect jika ingin langsung ke halaman dashboard
        } else {
            // Kalau auth gagal
            return redirect('sesi')->withErrors('Username/Password Yang Dimasukkan Tidak Valid');
        }
    }
    function logout(){
        Auth::logout();
        return redirect('/sesi/login')->with('Berhasil Logout');        
    }

    function register()
    {
        return View('sesi.register');
    }
    function create(request $request)
    {
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);
        $request->validate([
            'name'=>'required',
            'email' => 'required|email|uniqe:users',
            'password' => 'required|min:6'
        ],[
            'name.required'=> 'Nama Wajib Di Isi',
            'email.required' => 'Email Wajib Di Isi',
            'email.email' => 'Format Email Tidak Valid',
            'email.uniqe' => 'Email Sudah Digunakan',
            'password.required' => 'Password Wajib Di Isi',
            'password.min' => 'Password minimal 6 karakter',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];

        User::create($data);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($infologin)) {
            // Kalau auth sukses
            return redirect('/')->with('success',Auth::user()->name.'Berhasil Login'); // Ganti dengan redirect jika ingin langsung ke halaman dashboard
        } else {
            // Kalau auth gagal
            return redirect('sesi')->withErrors('Username/Password Yang Dimasukkan Tidak Valid');
        }
    }
}
