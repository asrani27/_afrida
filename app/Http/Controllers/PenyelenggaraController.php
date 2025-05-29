<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penyelenggara;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Session;

class PenyelenggaraController extends Controller
{
    public function index()
    {
        $data = Penyelenggara::orderBy('id', 'DESC')->paginate(10);

        return view('superadmin.penyelenggara.index', compact('data'));
    }
    public function add()
    {
        return view('superadmin.penyelenggara.create');
    }
    public function store(Request $req)
    {
        $param = $req->all();
        Penyelenggara::create($param);
        Session::flash('success', 'Berhasil Disimpan');
        return redirect('/superadmin/penyelenggara');
    }
    public function edit($id)
    {
        $data = Penyelenggara::find($id);
        return view('superadmin.penyelenggara.edit', compact('data'));
    }

    public function update(Request $req, $id)
    {
        $param = $req->all();
        Penyelenggara::find($id)->update($param);
        Session::flash('success', 'Berhasil Diupdate');
        return redirect('/superadmin/penyelenggara');
    }
    public function delete($id)
    {
        Penyelenggara::find($id)->delete();
        Session::flash('success', 'Berhasil Dihapus');
        return redirect('/superadmin/penyelenggara');
    }

    public function print()
    {
        $data = Penyelenggara::get();
        $pdf = Pdf::loadView('superadmin.laporan.pdf_penyelenggara', compact('data'))->setPaper('a4', 'landscape');;
        return $pdf->stream();
    }
}
