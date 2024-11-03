<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $team = Team::all();
        return view('admin.component.team', compact('team'));
    }

    public function post(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'jabatan' => 'required',
        ]);

        $team = new Team();
        $team->nama = $request->nama;
        $file = $request->file('foto');
        $ext = $file->getClientOriginalExtension();
        $filename = time() . '.' . $ext;
        $file->move(public_path('/assets/team'), $filename);
        $team->foto = $filename;
        $team->jabatan = $request->jabatan;
        $team->save();

        return redirect()->back()->with('success', 'Data berhasil ditambahkan');
    }

    public function delete($id)
    {
        $team = Team::find($id);
        $team->delete();
        return redirect()->back()->with('success', 'Data berhasil di hapus');
    }

    public function update(Request $request, $id)
    {
        $team = Team::find($id);
        $file = $request->file('foto');
        $ext = $file->getClientOriginalExtension();
        $filename = time() . '.' . $ext;
        $file->move(public_path('/assets/team'), $filename);
        $team->update([
            'nama' => $request->nama,
            'foto' => $filename,
            'jabatan' => $request->jabatan,
        ]);
        return redirect('/team')->with('success', 'Data Berhasil diupdate');
    }
}
