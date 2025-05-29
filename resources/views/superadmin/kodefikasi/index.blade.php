@extends('layouts.app')

@section('content')
<div class="row">
    <!-- [ stiped-table ] start -->
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h5>Data kodefikasi</h5>
                <div class="card-header-right">
                    <div class="btn-group card-option">

                        <a href="/superadmin/kodefikasi/add" class="btn btn-primary">Tambah</a>
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
                                <th>Kode Wilayah</th>
                                <th>Tahun</th>
                                <th>Kode KLUI</th>
                                <th>Laporan Ke</th>
                                <th>aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key=> $item)
                            <tr>
                                <td>{{$data->firstItem() + $key}}</td>
                                <td>{{$item->nomor}}</td>
                                <td>{{$item->kode_wilayah}}</td>
                                <td>{{$item->tahun}}</td>
                                <td>{{$item->kode_klui}}</td>
                                <td>{{$item->ke}}</td>
                                <td>
                                    <a href="/superadmin/kodefikasi/edit/{{$item->id}}"
                                        class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
                                    <a href="/superadmin/kodefikasi/delete/{{$item->id}}" class="btn btn-sm btn-danger"
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