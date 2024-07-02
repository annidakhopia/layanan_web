<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembayaranSiswaController extends Controller
{
    public function index()
    {
        return view('pembayaran-siswa.index');
    }
}
