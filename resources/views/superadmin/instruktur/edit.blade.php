@extends('layouts.app')

@section('content')

<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <h5>Edit Data</h5>
        </div>
        <div class="card-body">
            <form method="post" action="/superadmin/instruktur/edit/{{$data->id}}">
                @csrf
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="floating-label" for="Email">Nama</label>
                            <input type="text" class="form-control" name="nama" value="{{$data->nama}}" required>
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">Telp</label>
                            <input type="text" class="form-control" name="telp" value="{{$data->telp}}" required>
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">spesialisasi</label>
                            <input type="text" class="form-control" name="spesialisasi" value="{{$data->spesialisasi}}"
                                required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="/superadmin/instruktur" class="btn btn-secondary">Kembali</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@push('js')

@endpush