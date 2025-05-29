<?php

use App\Models\Deviasi;
use App\Models\Dataumum;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HasilController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\InstrukturController;
use App\Http\Controllers\KodefikasiController;
use App\Http\Controllers\LaporKerjaController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\PenyelenggaraController;

Route::get('/', [LoginController::class, 'welcome']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::middleware(['auth', 'superadmin'])->group(function () {
    Route::get('/superadmin', [HomeController::class, 'superadmin']);
    Route::get('/superadmin/laporan', [LaporanController::class, 'index']);

    Route::get('/superadmin/laporan/bulan', [LaporanController::class, 'bulan']);

    Route::get('/superadmin/jenis', [JenisController::class, 'index']);
    Route::get('/superadmin/jenis/add', [JenisController::class, 'add']);
    Route::get('/superadmin/jenis/edit/{id}', [JenisController::class, 'edit']);
    Route::get('/superadmin/jenis/delete/{id}', [JenisController::class, 'delete']);
    Route::post('/superadmin/jenis/add', [JenisController::class, 'store']);
    Route::post('/superadmin/jenis/edit/{id}', [JenisController::class, 'update']);
    Route::get('/superadmin/jenis/print', [JenisController::class, 'print']);

    Route::get('/superadmin/peserta', [PesertaController::class, 'index']);
    Route::get('/superadmin/peserta/add', [PesertaController::class, 'add']);
    Route::get('/superadmin/peserta/edit/{id}', [PesertaController::class, 'edit']);
    Route::get('/superadmin/peserta/delete/{id}', [PesertaController::class, 'delete']);
    Route::post('/superadmin/peserta/add', [PesertaController::class, 'store']);
    Route::post('/superadmin/peserta/edit/{id}', [PesertaController::class, 'update']);
    Route::get('/superadmin/peserta/print', [PesertaController::class, 'print']);

    Route::get('/superadmin/instruktur', [InstrukturController::class, 'index']);
    Route::get('/superadmin/instruktur/add', [InstrukturController::class, 'add']);
    Route::get('/superadmin/instruktur/edit/{id}', [InstrukturController::class, 'edit']);
    Route::get('/superadmin/instruktur/delete/{id}', [InstrukturController::class, 'delete']);
    Route::post('/superadmin/instruktur/add', [InstrukturController::class, 'store']);
    Route::post('/superadmin/instruktur/edit/{id}', [InstrukturController::class, 'update']);
    Route::get('/superadmin/instruktur/print', [InstrukturController::class, 'print']);

    Route::get('/superadmin/jadwal', [JadwalController::class, 'index']);
    Route::get('/superadmin/jadwal/add', [JadwalController::class, 'add']);
    Route::get('/superadmin/jadwal/edit/{id}', [JadwalController::class, 'edit']);
    Route::get('/superadmin/jadwal/delete/{id}', [JadwalController::class, 'delete']);
    Route::post('/superadmin/jadwal/add', [JadwalController::class, 'store']);
    Route::post('/superadmin/jadwal/edit/{id}', [JadwalController::class, 'update']);
    Route::get('/superadmin/jadwal/print', [JadwalController::class, 'print']);

    Route::get('/superadmin/pendaftaran', [PendaftaranController::class, 'index']);
    Route::get('/superadmin/pendaftaran/add', [PendaftaranController::class, 'add']);
    Route::get('/superadmin/pendaftaran/edit/{id}', [PendaftaranController::class, 'edit']);
    Route::get('/superadmin/pendaftaran/delete/{id}', [PendaftaranController::class, 'delete']);
    Route::post('/superadmin/pendaftaran/add', [PendaftaranController::class, 'store']);
    Route::post('/superadmin/pendaftaran/edit/{id}', [PendaftaranController::class, 'update']);
    Route::get('/superadmin/pendaftaran/print', [PendaftaranController::class, 'print']);

    Route::get('/superadmin/penyelenggara', [PenyelenggaraController::class, 'index']);
    Route::get('/superadmin/penyelenggara/add', [PenyelenggaraController::class, 'add']);
    Route::get('/superadmin/penyelenggara/edit/{id}', [PenyelenggaraController::class, 'edit']);
    Route::get('/superadmin/penyelenggara/delete/{id}', [PenyelenggaraController::class, 'delete']);
    Route::post('/superadmin/penyelenggara/add', [PenyelenggaraController::class, 'store']);
    Route::post('/superadmin/penyelenggara/edit/{id}', [PenyelenggaraController::class, 'update']);
    Route::get('/superadmin/penyelenggara/print', [PenyelenggaraController::class, 'print']);

    Route::get('/superadmin/hasil', [HasilController::class, 'index']);
    Route::get('/superadmin/hasil/add', [HasilController::class, 'add']);
    Route::get('/superadmin/hasil/edit/{id}', [HasilController::class, 'edit']);
    Route::get('/superadmin/hasil/delete/{id}', [HasilController::class, 'delete']);
    Route::post('/superadmin/hasil/add', [HasilController::class, 'store']);
    Route::post('/superadmin/hasil/edit/{id}', [HasilController::class, 'update']);
    Route::get('/superadmin/hasil/print', [HasilController::class, 'print']);
});

Route::get('/logout', function () {
    Auth::logout();
    Session::flash('success', 'Anda Telah Logout');
    return redirect('/');
});
