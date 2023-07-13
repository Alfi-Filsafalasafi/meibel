<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LatsolController extends Controller
{
    public function index()
    {
        $latsol = DB::table('latihan_soal')->get();
        return view('latsol', ['latihan_soal' => $latsol]);
    }
}
