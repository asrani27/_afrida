@extends('layouts.app')

@section('content')
<div class="row">
    <!-- [ stiped-table ] start -->
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h5>Data jadwal</h5>
                <div class="card-header-right">
                    <div class="btn-group card-option">

                        <a href="/superadmin/jadwal/add" class="btn btn-primary">Tambah</a>
                        <a href="/superadmin/jadwal/print" class="btn btn-danger" target="_blank">PRINT</a>
                    </div>
                </div>
            </div>
            <div class="card-body table-border-style">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Jenis</th>
                                <th>Penyelenggara</th>
                                <th>Instruktur</th>
                                <th>Tgl Mulai</th>
                                <th>Tgl Selesai</th>
                                <th>keterangan</th>
                                <th>aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key=> $item)
                            <tr>
                                <td>{{$data->firstItem() + $key}}</td>
                                {{-- <td>{{\Carbon\Carbon::parse($item->tanggal)->format('d M Y')}}</td> --}}
                                <td>{{$item->jenis == null ? '': $item->jenis->nama}}</td>
                                <td>{{$item->penyelenggara == null ? '': $item->penyelenggara->nama}}</td>
                                <td>{{$item->instruktur == null ? '': $item->instruktur->nama}}</td>
                                <td>{{$item->mulai}}</td>
                                <td>{{$item->selesai}}</td>
                                <td>{{$item->keterangan}}</td>
                                <td>
                                    <a href="/superadmin/jadwal/edit/{{$item->id}}" class="btn btn-sm btn-success"><i
                                            class="fa fa-edit"></i></a>
                                    <a href="/superadmin/jadwal/delete/{{$item->id}}" class="btn btn-sm btn-danger"
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