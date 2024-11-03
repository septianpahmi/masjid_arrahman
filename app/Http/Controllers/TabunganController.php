<?php

namespace App\Http\Controllers;

use App\Models\Tabungan;
use Illuminate\Http\Request;

class TabunganController extends Controller
{
    public function index()
    {
        $tab = Tabungan::all();
        foreach ($tab as $tabungan) {
            // Menghapus titik dari nilai proyeksi
            $proyeksi = str_replace('.', '', $tabungan->proyeksi);

            // Pastikan bahwa proyeksi adalah angka
            if (is_numeric($proyeksi) && $proyeksi > 0) {
                // Konversi ke integer setelah menghapus titik
                $proyeksi = (int) $proyeksi;

                $tabungan->setoran_12_bulan = $proyeksi / 12;
                $tabungan->setoran_24_bulan = $proyeksi / 24;
                $tabungan->setoran_36_bulan = $proyeksi / 36;
            } else {
                // Tangani kasus di mana proyeksi tidak valid
                $tabungan->setoran_12_bulan = 0;
                $tabungan->setoran_24_bulan = 0;
                $tabungan->setoran_36_bulan = 0;
            }
        }

        return view('users.component.tabungan', compact('tab'));
    }
    public function indexAdmin()
    {
        $tab = Tabungan::all();
        return view('admin.component.tabungan', compact('tab'));
    }

    public function post(Request $request)
    {
        $tab = Tabungan::create([
            'hewan' => $request->hewan,
            'proyeksi' => $request->proyeksi,
        ]);
        return redirect('/tabungan-zakat')->with('success', 'Tabungan Berhasil dibuat');
    }

    public function update(Request $request, $id)
    {
        $tab = Tabungan::find($id);
        $tab->update([
            'hewan' => $request->hewan,
            'proyeksi' => $request->proyeksi,
        ]);
        return redirect('/tabungan-zakat')->with('success', 'Tabungan Berhasil diupdate');
    }
}
