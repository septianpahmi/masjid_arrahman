<?php

namespace App\Http\Controllers;

use App\Models\Fidyah;
use Illuminate\Http\Request;

class FidyahController extends Controller
{
    public function index()
    {
        return view('users.component.fidyah');
    }

    public function indexAdmin()
    {
        $fidyah = Fidyah::all();
        return view('admin.component.fidyah', compact('fidyah'));
    }

    public function delete($id)
    {
        $fidyah = Fidyah::find($id);
        $fidyah->delete();
        return redirect()->back()->with('success', 'Data Fidyah Berhasil dihapus');
    }

    public function payment(Request $request)
    {
        $request->validate([
            'gender' => 'required',
        ], [
            'gender.required' => 'Silahkan pilih gender.'
        ]);
        $fidyah = new Fidyah();
        $fidyah->nama = $request->nama;
        $fidyah->gender = $request->gender;
        $fidyah->phone = $request->phone;
        $fidyah->email = $request->email;
        $fidyah->jumlah = $request->jumlah;
        $fidyah->nominal = $request->nominal;
        $fidyah->save();
        return redirect()->route('fidyah.show', ['id' => $fidyah->id]);
        // return view('users.component.fidyah-invoice', compact('fidyah'));
    }
    public function show($id)
    {
        $fidyah = Fidyah::find($id);
        return view('users.component.fidyah-invoice', compact('fidyah'));
    }
    public function print($id)
    {

        $fidyah = Fidyah::find($id);
        return view('users.layout.fidyah', compact('fidyah'));
    }
    public function approve($id)
    {
        $fidyah = Fidyah::find($id);
        $fidyah->status = "Berhasil";
        $fidyah->save();
        return redirect()->back()->with('success', 'Pembayaran Fidyah berhasil di konfirmasi');
    }
    public function reject($id)
    {
        $fidyah = Fidyah::find($id);
        $fidyah->status = "Gagal";
        $fidyah->save();
        return redirect()->back()->with('error', 'Pembayaran Fidyah berhasil di konfirmasi');
    }
}
