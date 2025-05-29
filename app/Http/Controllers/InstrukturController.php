<?php

namespace App\Http\Controllers;

use App\Models\Instruktur;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Session;

class InstrukturController extends Controller
{
    public function index()
    {
        $data = Instruktur::orderBy('id', 'DESC')->paginate(10);

        return view('superadmin.instruktur.index', compact('data'));
    }
    public function add()
    {
        return view('superadmin.instruktur.create');
    }
    public function store(Request $req)
    {
        $param = $req->all();
        Instruktur::create($param);
        Session::flash('success', 'Berhasil Disimpan');
        return redirect('/superadmin/instruktur');
    }
    public function edit($id)
    {
        $data = Instruktur::find($id);
        return view('superadmin.instruktur.edit', compact('data'));
    }

    public function update(Request $req, $id)
    {
        $param = $req->all();
        Instruktur::find($id)->update($param);
        Session::flash('success', 'Berhasil Diupdate');
        return redirect('/superadmin/instruktur');
    }
    public function delete($id)
    {
        Instruktur::find($id)->delete();
        Session::flash('success', 'Berhasil Dihapus');
        return redirect('/superadmin/instruktur');
    }

    public function print()
    {
        $data = Instruktur::get();
        $pdf = Pdf::loadView('superadmin.laporan.pdf_instruktur', compact('data'))->setPaper('a4', 'landscape');;
        return $pdf->stream();
    }
}
