<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PengeluaranController extends Controller
{
    public function index()
    {
        // Data pengeluaran dummy untuk contoh
        $pengeluaran = [
            ['tanggal' => '13 Maret 2033', 'keterangan' => 'Pembangunan', 'jumlah' => 1000000]
        ];

        return view('pengeluaran.index', compact('pengeluaran'));
    }
}
