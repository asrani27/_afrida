@extends('layouts.app')

@section('content')
<div class="row">
    <!-- [ stiped-table ] start -->
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h5>Data hasil</h5>
                <div class="card-header-right">
                    <div class="btn-group card-option">

                        <a href="/superadmin/hasil/add" class="btn btn-primary">Tambah</a>
                        <a href="/superadmin/hasil/print" class="btn btn-danger" target="_blank">PRINT</a>
                    </div>
                </div>
            </div>
            <div class="card-body table-border-style">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Peserta Pendaftaran</th>
                                <th>nilai</th>
                                <th>sertifikat</th>
                                <th>catatan</th>
                                <th>aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key=> $item)
                            <tr>
                                <td>{{$data->firstItem() + $key}}</td>
                                <td>{{$item->pendaftaran == null ? '': $item->pendaftaran->peserta->nama}}</td>
                                <td>{{$item->nilai}}</td>
                                <td>{{$item->sertifikat}}</td>
                                <td>{{$item->catatan}}</td>
                                <td>
                                    <a href="/superadmin/hasil/edit/{{$item->id}}" class="btn btn-sm btn-success"><i
                                            class="fa fa-edit"></i></a>
                                    <a href="/superadmin/hasil/delete/{{$item->id}}" class="btn btn-sm btn-danger"
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