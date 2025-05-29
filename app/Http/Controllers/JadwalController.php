<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use App\Models\Jadwal;
use App\Models\Instruktur;
use Illuminate\Http\Request;
use App\Models\Penyelenggara;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Session;

class JadwalController extends Controller
{
    public function index()
    {
        $data = Jadwal::orderBy('id', 'DESC')->paginate(10);

        return view('superadmin.jadwal.index', compact('data'));
    }
    public function add()
    {
        $jenis = Jenis::get();
        $penyelenggara = Penyelenggara::get();
        $instruktur = Instruktur::get();
        return view('superadmin.jadwal.create', compact('jenis', 'penyelenggara', 'instruktur'));
    }
    public function store(Request $req)
    {
        $param = $req->all();
        jadwal::create($param);
        Session::flash('success', 'Berhasil Disimpan');
        return redirect('/superadmin/jadwal');
    }
    public function edit($id)
    {
        $jenis = Jenis::get();
        $penyelenggara = Penyelenggara::get();
        $instruktur = Instruktur::get();
        $data = jadwal::find($id);
        return view('superadmin.jadwal.edit', compact('data', 'jenis', 'penyelenggara', 'instruktur'));
    }

    public function update(Request $req, $id)
    {
        $param = $req->all();
        jadwal::find($id)->update($param);
        Session::flash('success', 'Berhasil Diupdate');
        return redirect('/superadmin/jadwal');
    }
    public function delete($id)
    {
        jadwal::find($id)->delete();
        Session::flash('success', 'Berhasil Dihapus');
        return redirect('/superadmin/jadwal');
    }

    public function print()
    {
        $data = jadwal::get();
        $pdf = Pdf::loadView('superadmin.laporan.pdf_jadwal', compact('data'))->setPaper('a4', 'landscape');;
        return $pdf->stream();
    }
}
