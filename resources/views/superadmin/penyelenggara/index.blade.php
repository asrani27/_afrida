@extends('layouts.app')

@section('content')
<div class="row">
    <!-- [ stiped-table ] start -->
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h5>Data penyelenggara</h5>
                <div class="card-header-right">
                    <div class="btn-group card-option">

                        <a href="/superadmin/penyelenggara/add" class="btn btn-primary">Tambah</a>
                        <a href="/superadmin/penyelenggara/print" class="btn btn-danger" target="_blank">PRINT</a>
                    </div>
                </div>
            </div>
            <div class="card-body table-border-style">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Telp</th>
                                <th>aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key=> $item)
                            <tr>
                                <td>{{$data->firstItem() + $key}}</td>
                                <td>{{$item->nama}}</td>
                                <td>{{$item->alamat}}</td>
                                <td>{{$item->telp}}</td>
                                <td>
                                    <a href="/superadmin/penyelenggara/edit/{{$item->id}}"
                                        class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
                                    <a href="/superadmin/penyelenggara/delete/{{$item->id}}"
                                        class="btn btn-sm btn-danger"
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