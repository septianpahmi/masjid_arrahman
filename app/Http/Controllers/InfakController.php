<?php

namespace App\Http\Controllers;

use App\Models\Infak;
use App\Models\KatInfak;
use Illuminate\Http\Request;

class InfakController extends Controller
{
    public function index()
    {
        $infak = KatInfak::all();
        return view('admin.component.infak', compact('infak'));
    }


    public function post(Request $request)
    {

        $infak = new KatInfak();
        $infak->infak = $request->infak;
        $infak->save();
        return redirect()->back()->with('success', 'Data berhasil ditambahkan');
    }

    public function delete($id)
    {
        $infak = KatInfak::find($id);
        $infak->delete();
        return redirect()->back()->with('success', 'Data berhasil di hapus');
    }
    public function report()
    {
        $infak = Infak::all();
        return view('admin.component.report-infak', compact('infak'));
    }
    public function reportDelete($id)
    {
        $infak = Infak::find($id);
        $infak->delete();
        return redirect()->back()->with('success', 'Data berhasil di hapus');
    }

    public function indexUser()
    {
        $infak = KatInfak::all();
        return view('users.component.infak', compact('infak'));
    }

    public function payment(Request $request)
    {
        $request->validate([
            'id_infak' => 'required',
            'nominal' => 'required',
        ], [
            'id_infak.required' => 'Silahkan pilih infak.'
        ]);
        $infak = new Infak();
        $infak->id_infak = $request->id_infak;
        $infak->nominal = $request->nominal;
        $infak->save();
        return redirect()->route('infak.show', ['id' => $infak->id]);

        // return view('users.component.infak-invoice', compact('infak'));
    }

    public function show($id)
    {
        $infak = Infak::find($id);
        return view('users.component.infak-invoice', compact('infak'));
    }

    public function print($id)
    {
        $infak = Infak::find($id);
        return view('users.layout.infak', compact('infak'));
    }
    public function approve($id)
    {
        $infak = Infak::find($id);
        $infak->status = "Berhasil";
        $infak->save();
        return redirect()->back()->with('success', 'Pembayaran Infak berhasil di konfirmasi');
    }
    public function reject($id)
    {
        $infak = Infak::find($id);
        $infak->status = "Gagal";
        $infak->save();
        return redirect()->back()->with('error', 'Pembayaran Infak berhasil di konfirmasi');
    }
}
