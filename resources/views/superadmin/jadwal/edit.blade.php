@extends('layouts.app')

@section('content')

<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <h5>Edit Data</h5>
        </div>
        <div class="card-body">
            <form method="post" action="/superadmin/jadwal/edit/{{$data->id}}">
                @csrf
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="floating-label">jenis</label>
                            <select class="form-control" name="jenis_id">
                                <option value="">-</option>
                                @foreach ($jenis as $item)
                                <option value="{{$item->id}}" {{$data->jenis_id == $item->id ?
                                    'selected':''}}>{{$item->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="floating-label">penyelenggara</label>
                            <select class="form-control" name="penyelenggara_id">
                                <option value="">-</option>
                                @foreach ($penyelenggara as $item)
                                <option value="{{$item->id}}" {{$data->penyelenggara_id == $item->id ?
                                    'selected':''}}>{{$item->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="floating-label">instruktur</label>
                            <select class="form-control" name="instruktur_id">
                                <option value="">-</option>
                                @foreach ($instruktur as $item)
                                <option value="{{$item->id}}" {{$data->instruktur_id == $item->id ?
                                    'selected':''}}>{{$item->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">tanggal mulai</label>
                            <input type="date" class="form-control" name="mulai" value="{{$data->mulai}}" required>
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">tanggal selesai</label>
                            <input type="date" class="form-control" name="selesai" value="{{$data->selesai}}" required>
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">keterangan</label>
                            <input type="text" class="form-control" name="keterangan" value="{{$data->keterangan}}"
                                required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="/superadmin/jadwal" class="btn btn-secondary">Kembali</a>
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