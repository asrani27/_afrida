<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use App\Models\Peserta;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Session;

class PendaftaranController extends Controller
{
    public function index()
    {
        $data = Pendaftaran::orderBy('id', 'DESC')->paginate(10);

        return view('superadmin.pendaftaran.index', compact('data'));
    }
    public function add()
    {
        $peserta = Peserta::get();
        return view('superadmin.pendaftaran.create', compact('peserta'));
    }
    public function store(Request $req)
    {
        $param = $req->all();
        Pendaftaran::create($param);
        Session::flash('success', 'Berhasil Disimpan');
        return redirect('/superadmin/pendaftaran');
    }
    public function edit($id)
    {
        $peserta = Peserta::get();
        $data = Pendaftaran::find($id);
        return view('superadmin.pendaftaran.edit', compact('data', 'peserta'));
    }

    public function update(Request $req, $id)
    {
        $param = $req->all();
        Pendaftaran::find($id)->update($param);
        Session::flash('success', 'Berhasil Diupdate');
        return redirect('/superadmin/pendaftaran');
    }
    public function delete($id)
    {
        try {
            Pendaftaran::find($id)->delete();
            Session::flash('success', 'Berhasil Dihapus');
            return redirect('/superadmin/pendaftaran');
        } catch (\Exception $e) {
            Session::flash('error', 'Tidak bisa di hapus, karena terelasi dengan data hasil');
            return back();
        }
    }

    public function print()
    {
        $data = Pendaftaran::get();
        $pdf = Pdf::loadView('superadmin.laporan.pdf_pendaftaran', compact('data'))->setPaper('a4', 'landscape');;
        return $pdf->stream();
    }
}
