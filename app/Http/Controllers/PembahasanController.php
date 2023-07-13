<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PembahasanController extends Controller
{
    public function index()
    {
        $ps = DB::table('pembahasan_soal')->get();
        return view('pembahas', ['pembahasan_soal' => $ps]);
    }
}
