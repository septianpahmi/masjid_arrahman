<?php

namespace App\Http\Controllers;

use App\Models\Zakat;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
    {
        $pay = Zakat::all();
        return view('admin.component.payment', ['pay' => $pay]);
    }

    public function delete($id)
    {
        $pay = Zakat::find($id);
        if (!$pay) {
            return redirect('/pembayaran')->with('error', 'Data Pembayaran tidak ditemukan.');
        }
        $pay->delete();
        return redirect('/pembayaran')->with('success', 'Data Pembayaran berhasil dihapus.');
    }
    public function payment(Request $request)
    {
        $request->validate([
            'id_kategori' => 'required',
            'gender' => 'required',
        ], [
            'id_kategori.required' => 'Silahkan pilih zakat.',
            'gender.required' => 'Silahkan pilih gender.'
        ]);

        $pay = new Zakat();
        $pay->id_kategori = $request->id_kategori;
        $pay->nama = $request->nama;
        $pay->nominal = $request->nominal;
        $pay->gender = $request->gender;
        $pay->phone = $request->phone;
        $pay->email = $request->email;
        $pay->save();
        return redirect()->route('bayar-zakat.show', ['id' => $pay->id]);

        // return view('users.component.invoice', ['pay' => $pay]);
    }
    public function show($id)
    {
        $pay = Zakat::find($id);
        return view('users.component.invoice', compact('pay'));
    }

    public function print($id)
    {

        $pay = Zakat::find($id);
        return view('users.layout.invoice', ['pay' => $pay]);
    }

    public function approve($id)
    {
        $data = Zakat::find($id);
        $data->status = "Berhasil";
        $data->save();
        return redirect('/pembayaran')->with('success', 'Pembayaran zakat berhasil di konfirmasi.');
    }
    public function reject($id)
    {
        $data = Zakat::find($id);
        $data->status = "Gagal";
        $data->save();
        return redirect('/pembayaran')->with('error', 'Pembayaran zakat berhasil di konfirmasi.');
    }
}
