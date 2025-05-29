@extends('layouts.app')

@section('content')

<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <h5>Edit Data</h5>
        </div>
        <div class="card-body">
            <form method="post" action="/superadmin/kodefikasi/edit/{{$data->id}}">
                @csrf
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="floating-label" for="Email">Nomor</label>
                            <input type="text" class="form-control" name="nomor" value="{{$data->nomor}}" required>
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">Kode Wilayah</label>
                            <input type="text" class="form-control" name="kode_wilayah" value="{{$data->kode_wilayah}}"
                                required>
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">Tahun</label>
                            <input type="text" class="form-control" name="tahun" value="{{$data->tahun}}" required>
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">Kode KLUI</label>
                            <input type="text" class="form-control" name="kode_klui" value="{{$data->kode_klui}}"
                                required>
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">Ke</label>
                            <input type="text" class="form-control" name="ke" value="{{$data->ke}}" required>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="/superadmin/kodefikasi" class="btn btn-secondary">Kembali</a>
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