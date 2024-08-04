@extends('layouts.admin')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-12">
                    <div class="card">
                        <form action="/admin/pengaduan/update/{{ $pengaduan->id }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-header">
                                <h4>Pengaduan</h4>
                            </div>
                            @if (session('success'))
                            <div class="alert alert-warning" role="alert">
                               {{ session('success') }}
                            </div>
                            @endif
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" class="form-control" value="{{ $pengaduan->user->nama }}">
                                </div>
                                <div class="form-group">
                                    <label for="">NIK</label>
                                    <input type="text" class="form-control" value="{{ $pengaduan->user->nik }}">
                                </div>
                                <div class="form-group">
                                    <label for="">No Telepon</label>
                                    <input type="text" class="form-control" value="{{ $pengaduan->user->no_tlp }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <input type="text" class="form-control" value="{{ $pengaduan->user->alamat }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Judul pengaduan</label>
                                    <input type="text" class="form-control" value="{{ $pengaduan->judul_pengaduan }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Aduan</label>
                                    <textarea class="form-control" name="deskripsi">{{ $pengaduan->deskripsi }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Balasan anda</label>
                                    <textarea class="form-control" name="komentar"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                                <button type="button" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-form').submit();">Hapus</button>
                            </div>
                        </form>
                        <form id="delete-form" action="/user/pengaduan/delete/{{ $pengaduan->id }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </div>
                </div>
                @isset($pengaduan->komentar)
                <div class="col-12 col-md-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Blasan anda</h4>
                        </div>
                        <div class="card-body">
                            {{ $pengaduan->komentar }}
                        </div>
                    </div>
                </div>
                @endisset
            </div>
        </div>
    </section>
</div>
@endsection
