<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Session;

class PesertaController extends Controller
{
    public function index()
    {
        $data = Peserta::orderBy('id', 'DESC')->paginate(10);

        return view('superadmin.peserta.index', compact('data'));
    }
    public function add()
    {
        return view('superadmin.peserta.create');
    }
    public function store(Request $req)
    {
        $param = $req->all();
        Peserta::create($param);
        Session::flash('success', 'Berhasil Disimpan');
        return redirect('/superadmin/peserta');
    }
    public function edit($id)
    {
        $data = Peserta::find($id);
        return view('superadmin.peserta.edit', compact('data'));
    }

    public function update(Request $req, $id)
    {
        $param = $req->all();
        Peserta::find($id)->update($param);
        Session::flash('success', 'Berhasil Diupdate');
        return redirect('/superadmin/peserta');
    }
    public function delete($id)
    {
        Peserta::find($id)->delete();
        Session::flash('success', 'Berhasil Dihapus');
        return redirect('/superadmin/peserta');
    }

    public function print()
    {
        $data = Peserta::get();
        $pdf = Pdf::loadView('superadmin.laporan.pdf_peserta', compact('data'))->setPaper('a4', 'landscape');;
        return $pdf->stream();
    }
}
