<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FidyahController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfakController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TabunganController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ZakatController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/informasi', [HomeController::class, 'informasi'])->name('informasi');

Route::get('/dashboard', [HomeController::class, 'admin'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/bayar-zakat', [ZakatController::class, 'index'])->name('bayar-zakat');
Route::get('/get-subkategori/{id}', [ZakatController::class, 'getSubKategori']);

Route::post('/bayar-zakat/payment', [PembayaranController::class, 'payment'])->name('bayar-zakat.payment');
Route::get('/bayar-zakat/payment/{id}', [PembayaranController::class, 'show'])->name('bayar-zakat.show');
Route::get('/bayar-zakat/payment/print/{id}', [PembayaranController::class, 'print'])->name('payment.print');

Route::get('/kalkulator', [KalkulatorController::class, 'index'])->name('kalkulator');
Route::post('/kalkulator/store', [KalkulatorController::class, 'store'])->name('kalkulator.store');

Route::get('/tabungan', [TabunganController::class, 'index'])->name('tabungan.zakat');

Route::get('/fidyah', [FidyahController::class, 'index'])->name('fidyah.user');
Route::post('/fidyah/generate-invoice', [FidyahController::class, 'payment'])->name('fidyah.payment');
Route::get('/fidyah/generate-invoice/{id}', [FidyahController::class, 'show'])->name('fidyah.show');
Route::get('/fidyah/invoice/print/{id}', [FidyahController::class, 'print'])->name('fidyah.print');

Route::get('/ayo-infak', [InfakController::class, 'indexUser'])->name('infak.user');
Route::post('/ayo-infak/generate-invoice', [InfakController::class, 'payment'])->name('infak.payment');
Route::get('/ayo-infak/generate-invoice/{id}', [InfakController::class, 'show'])->name('infak.show');
Route::get('/ayo-infak/generate-invoice/print/{id}', [InfakController::class, 'print'])->name('infak.print');
Route::get('/jadwal-solat', [JadwalController::class, 'index'])->name('jadwal');


Route::middleware('auth')->group(function () {
    Route::get('/zakat', [ZakatController::class, 'indexAdmin'])->name('zakat');
    Route::post('/zakat/post', [ZakatController::class, 'post'])->name('zakat.post');
    Route::get('/zakat/{id}', [ZakatController::class, 'delete'])->name('zakat.delete');
    Route::get('/zakat/sub/{id}', [ZakatController::class, 'sub'])->name('zakat.sub');
    Route::post('/zakat/sub/post/{id}', [ZakatController::class, 'subPost'])->name('subzakat.post');
    Route::get('/zakat/sub/delete/{id}', [ZakatController::class, 'subdelete'])->name('subzakat.delete');

    Route::get('/pembayaran', [PembayaranController::class, 'index'])->name('pembayaran');
    Route::get('/pembayaran/{id}', [PembayaranController::class, 'delete'])->name('pembayaran.delete');
    Route::get('/pembayaran/approve/{id}', [PembayaranController::class, 'approve'])->name('pembayaran.approve');
    Route::get('/pembayaran/tolak/{id}', [PembayaranController::class, 'reject'])->name('pembayaran.tolak');

    Route::get('/tabungan-zakat', [TabunganController::class, 'indexAdmin'])->name('tabungan');
    Route::post('/tabungan-zakat/post', [TabunganController::class, 'post'])->name('tabungan.post');
    Route::post('/tabungan-zakat/update/{id}', [TabunganController::class, 'update'])->name('tabungan.update');

    Route::get('/report-fidyah', [FidyahController::class, 'indexAdmin'])->name('fidyah');
    Route::get('/report-fidyah/{id}', [FidyahController::class, 'delete'])->name('fidyah.delete');
    Route::get('/report-fidyah/approve/{id}', [FidyahController::class, 'approve'])->name('fidyah.approve');
    Route::get('/report-fidyah/reject/{id}', [FidyahController::class, 'reject'])->name('fidyah.reject');

    Route::get('/infak', [InfakController::class, 'index'])->name('infak');
    Route::post('/infak/post', [InfakController::class, 'post'])->name('infak.post');
    Route::get('/infak/{id}', [InfakController::class, 'delete'])->name('infak.delete');
    Route::get('/infak-report', [InfakController::class, 'report'])->name('infak.report');
    Route::get('/infak-report/{id}', [InfakController::class, 'reportDelete'])->name('infak.reportDelete');
    Route::get('/infak-report/approve/{id}', [InfakController::class, 'approve'])->name('infak.approve');
    Route::get('/infak-report/reject/{id}', [InfakController::class, 'reject'])->name('infak.reject');

    Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
    Route::post('/berita/post', [BeritaController::class, 'post'])->name('berita.post');
    Route::get('/berita/{id}', [BeritaController::class, 'delete'])->name('berita.delete');
    Route::post('/berita/update/{id}', [BeritaController::class, 'update'])->name('berita.update');

    Route::get('/team', [TeamController::class, 'index'])->name('team');
    Route::post('/team/post', [TeamController::class, 'post'])->name('team.post');
    Route::get('/team/{id}', [TeamController::class, 'delete'])->name('team.delete');
    Route::post('/team/update/{id}', [TeamController::class, 'update'])->name('team.update');
});


require __DIR__ . '/auth.php';
