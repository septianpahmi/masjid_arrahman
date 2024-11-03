<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::all();
        return view('admin.component.berita', compact('berita'));
    }

    public function post(Request $request)
    {
        $berita = new Berita();
        $berita->tittle = $request->tittle;
        $file = $request->file('gambar');
        $ext = $file->getClientOriginalExtension();
        $filename = time() . '.' . $ext;
        $file->move(public_path('/assets/berita'), $filename);
        $berita->gambar = $filename;
        $berita->link = $request->link;
        $berita->save();
        return redirect('/berita')->with('success', 'Berita Berhasil dibuat.');
    }


    public function delete($id)
    {
        $berita = Berita::find($id);
        $berita->delete();
        return redirect('/berita')->with('success', 'Berita Berhasil dihapus.');
    }

    public function update(Request $request, $id)
    {
        $berita = Berita::find($id);
        $file = $request->file('gambar');
        $ext = $file->getClientOriginalExtension();
        $filename = time() . '.' . $ext;
        $file->move(public_path('/assets/berita'), $filename);
        $berita->update([
            'tittle' => $request->tittle,
            'gambar' => $filename,
            'link' => $request->link,
        ]);
        return redirect('/berita')->with('success', 'Berita Berhasil diupdate');
    }
}
