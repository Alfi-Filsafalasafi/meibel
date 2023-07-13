<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input; //untuk input::get
use Illuminate\Support\Facades\Auth;
use Redirect; //untuk redirect

use App\PenggunaController;
use Illuminate\Http\Request;
use App\AdminController;

use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
/*     public function showLogin()
    {
        return view('login');
    } */

    public function login()
    {
        return view('login')->with('sukses','Anda Berhasil Login');
    }

    public function postlogin(Request $request)
    {
         // echo "$request->email.$request->password "; die;
         if(Auth::attempt($request->only('username','password'))){
            $akun = DB::table('users')->where('username', $request->username)->first();
            //dd($akun);
            if($akun->role =='admin')
            {
                Auth::guard('admin')->LoginUsingId($akun->id);
                return redirect('/dashboard')->with('sukses','Anda Berhasil Login');
            }
            else if($akun->role =='pengguna')
            {
                Auth::guard('pengguna')->LoginUsingId($akun->id);
                return redirect('/user2')->with('sukses','Anda Berhasil Login');
            }
         }
         return redirect('/masuk')->with('error','Akun Belum Terdaftar');
    }

    public function logout()
    {
        if(Auth::guard('admin')->check())
        {
            Auth::guard('admin')->logout();
        } 
        else if(Auth::guard('pengguna')->check())
        {
            Auth::guard('pengguna')->logout();
        } 
        return redirect('/masuk')->with('sukses','Anda Telah Logout');
    } 
}
?>