<?php

namespace App\Http\Controllers;

// use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
// use Illuminate\Foundation\Bus\DispatchesJobs;
// use Illuminate\Foundation\Validation\ValidatesRequests;
// use Illuminate\Routing\Controller as BaseController;

class PageController extends Controller
{
   public function index()
   {
        return view('login');
    }

   public function showRegister()
   {
       return view('register');
   }

   public function showMateri()
   {
       return view('materi');
   }

   public function showDashboard()
   {
       return view('dashboard');
   }

   public function showUser()
   {
       return view('user');
   }

   public function showUser2()
   {
       return view('user2');
   }

   public function showLatsol()
   {
       return view('latsol');
   }

   public function showPembahas()
   {
       return view('pembahas');
   }

   public function showUniversitas()
   {
       return view('universitas');
   }

   public function showAkun()
   {
       return view('akun');
   }

   public function showKatsol()
   {
       return view('katsol');
   }
}
