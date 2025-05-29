@extends('layouts.app')

@section('content')

<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <h5>Tambah Data</h5>
        </div>
        <div class="card-body">
            <form method="post" action="/superadmin/hasil/add">
                @csrf
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="floating-label">Peserta Pendaftaran</label>
                            <select class="form-control" name="pendaftaran_id">
                                <option value="">-</option>
                                @foreach ($pendaftaran as $item)
                                <option value="{{$item->id}}">{{$item->peserta->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">nilai</label>
                            <input type="text" class="form-control" name="nilai" required>
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">sertifikat</label>
                            <input type="text" class="form-control" name="sertifikat" required>
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">catatan</label>
                            <input type="text" class="form-control" name="catatan" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="/superadmin/hasil" class="btn btn-secondary">Kembali</a>
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