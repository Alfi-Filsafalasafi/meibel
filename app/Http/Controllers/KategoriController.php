<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index()
    {
        $kat = DB::table('kategori')->get();
        return view('kategori', ['kategori' => $kat]);
    }
}
