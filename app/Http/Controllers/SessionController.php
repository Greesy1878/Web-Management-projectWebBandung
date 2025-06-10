<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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
}
