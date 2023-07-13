<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MateriController extends Controller
{
    public function index()
    {
        $mtr = DB::table('materi')->get();
        return view('materi', ['materi' => $mtr]);
    }
}
