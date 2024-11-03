<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\SubKategori;
use Illuminate\Http\Request;

class ZakatController extends Controller
{
    public function index()
    {
        $kat = Kategori::all();

        return view('users.component.zakat', compact('kat'));
    }
    public function indexAdmin()
    {
        $kat = Kategori::all();
        return view('admin.component.jenis-zakat', compact('kat'));
    }
    public function sub($id)
    {
        $kat = Kategori::find($id);
        return view('admin.component.sub-zakat', compact('kat'));
    }

    public function post(Request $request)
    {
        $kat = new Kategori();
        $kat->kategori = $request->kategori;
        $kat->save();
        return redirect()->back()->with('success', 'Data berhasil ditambahkan');
    }

    public function delete($id)
    {
        $kat = Kategori::find($id);
        $kat->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
