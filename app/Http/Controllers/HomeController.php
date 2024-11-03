<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Zakat;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Fidyah;
use App\Models\Infak;

class HomeController extends Controller
{
    public function index()
    {
        $berita = Berita::all();
        $team = Team::all();
        return view('users.index', compact('berita', 'team'));
    }
    public function about()
    {
        return view('users.component.about');
    }
    public function informasi()
    {
        $berita = Berita::all();
        return view('users.component.informasi', compact('berita'));
    }

    public function admin()
    {
        $zakat = Zakat::where('status', 'berhasil')
            ->select(DB::raw('SUM(REPLACE(nominal, ".", "")) as total_zakat'))
            ->first();
        $fidyah = Fidyah::where('status', 'berhasil')
            ->select(DB::raw('SUM(REPLACE(nominal, ".", "")) as total_fidyah'))
            ->first();
        $infak = Infak::where('status', 'berhasil')
            ->select(DB::raw('SUM(REPLACE(nominal, ".", "")) as total_infak'))
            ->first();
        return view('admin.index', ['zakat' => $zakat->total_zakat, 'fidyah' => $fidyah->total_fidyah, 'infak' => $infak->total_infak]);
    }
}
