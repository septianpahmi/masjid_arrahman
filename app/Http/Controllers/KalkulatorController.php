<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\SubKategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KalkulatorController extends Controller
{
    public function index()
    {
        return view('users.component.kalkulator');
    }
    public function store(Request $request)
    {
        $kat = Kategori::all();
        // Ambil nilai dari form
        $pendapatan = str_replace('.', '', $request->input('pendapatan'));
        $lainnya = str_replace('.', '', $request->input('lainnya'));
        $total = str_replace('.', '', $request->input('total'));
        $zakat = $request->input('zakat');
        // Anda bisa melakukan apa saja dengan nilai ini, seperti menyimpannya di database, atau menampilkan hasilnya kembali ke view

        return view('users.component.kalkulator-store', compact('pendapatan', 'lainnya', 'total', 'zakat', 'kat'));
    }
}
