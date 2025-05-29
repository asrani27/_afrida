<?php

namespace App\Http\Controllers;

use App\Models\Hasil;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Session;

class HasilController extends Controller
{
    public function index()
    {
        $data = Hasil::orderBy('id', 'DESC')->paginate(10);

        return view('superadmin.hasil.index', compact('data'));
    }
    public function add()
    {
        $pendaftaran = Pendaftaran::get();
        return view('superadmin.hasil.create', compact('pendaftaran'));
    }
    public function store(Request $req)
    {
        $param = $req->all();
        Hasil::create($param);
        Session::flash('success', 'Berhasil Disimpan');
        return redirect('/superadmin/hasil');
    }
    public function edit($id)
    {
        $pendaftaran = Pendaftaran::get();
        $data = Hasil::find($id);
        return view('superadmin.hasil.edit', compact('data', 'pendaftaran'));
    }

    public function update(Request $req, $id)
    {
        $param = $req->all();
        Hasil::find($id)->update($param);
        Session::flash('success', 'Berhasil Diupdate');
        return redirect('/superadmin/hasil');
    }
    public function delete($id)
    {
        Hasil::find($id)->delete();
        Session::flash('success', 'Berhasil Dihapus');
        return redirect('/superadmin/hasil');
    }

    public function print()
    {
        $data = Hasil::get();
        $pdf = Pdf::loadView('superadmin.laporan.pdf_hasil', compact('data'))->setPaper('a4', 'landscape');;
        return $pdf->stream();
    }
}
