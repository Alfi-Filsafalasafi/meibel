<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UniversitasController extends Controller
{
    public function index()
    {
        $univ = DB::table('universitas')->get();
        return view('universitas', ['universitas' => $univ]);
    }
}
