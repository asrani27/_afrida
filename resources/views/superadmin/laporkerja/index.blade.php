@extends('layouts.app')

@section('content')
<div class="row">
    <!-- [ stiped-table ] start -->
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h5>Data Lapor Kerja</h5>
                <div class="card-header-right">
                    <div class="btn-group card-option">

                        <a href="/superadmin/laporkerja/add" class="btn btn-primary">Tambah</a>
                    </div>
                </div>
            </div>
            <div class="card-body table-border-style">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nomor</th>
                                <th>Perusahaan</th>
                                <th>Tanggal</th>
                                <th>Masa Berlaku</th>
                                <th>Jumlah Karyawan</th>
                                <th>aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key=> $item)
                            <tr>
                                <td>{{$data->firstItem() + $key}}</td>
                                <td>{{$item->nomor}}</td>
                                <td>{{$item->perusahaan == null ? '': $item->perusahaan->nama_usaha}}</td>
                                <td>{{$item->tanggal}}</td>
                                <td>{{$item->masa_berlaku}}</td>
                                <td>{{$item->jumlah_karyawan}}</td>
                                <td>
                                    <a href="/superadmin/laporkerja/edit/{{$item->id}}"
                                        class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
                                    <a href="/superadmin/laporkerja/delete/{{$item->id}}" class="btn btn-sm btn-danger"
                                        onclick="return confirm('Yakin ingin dihapus?');"><i
                                            class="fa fa-trash"></i></a>

                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                        {{$data->links()}}
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection