@extends('layouts.app')

@section('content')

<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <h5>Tambah Data</h5>
        </div>
        <div class="card-body">
            <form method="post" action="/superadmin/jadwal/add">
                @csrf
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="floating-label">jenis</label>
                            <select class="form-control" name="jenis_id">
                                <option value="">-</option>
                                @foreach ($jenis as $item)
                                <option value="{{$item->id}}">{{$item->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="floating-label">penyelenggara</label>
                            <select class="form-control" name="penyelenggara_id">
                                <option value="">-</option>
                                @foreach ($penyelenggara as $item)
                                <option value="{{$item->id}}">{{$item->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="floating-label">instruktur</label>
                            <select class="form-control" name="instruktur_id">
                                <option value="">-</option>
                                @foreach ($instruktur as $item)
                                <option value="{{$item->id}}">{{$item->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">tanggal mulai</label>
                            <input type="date" class="form-control" name="mulai"
                                value="{{\Carbon\Carbon::now()->format('Y-m-d')}}" required>
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">tanggal selesai</label>
                            <input type="date" class="form-control" name="selesai"
                                value="{{\Carbon\Carbon::now()->format('Y-m-d')}}" required>
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">keterangan</label>
                            <input type="text" class="form-control" name="keterangan" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
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