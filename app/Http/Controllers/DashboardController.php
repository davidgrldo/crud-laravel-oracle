<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // $data = DB::select('SELECT * FROM KARYAWAN');
        return view('dashboard', compact('data'));
    }
}