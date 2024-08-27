@extends('layouts.admin')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
            <div class="card">
              <div class="card-header">
                <h4>{{ $title }}</h4>
                <div class="section-header-button ml-auto">
                  <a href="/admin/nik" class="btn btn-primary">Kembali</a>
                </div>
              </div>
              @if (session('success'))
              <div class="alert alert-warning" role="alert">
                 {{ session('success') }}
              </div>
              @endif
              <div class="card-body">
                <form action="/admin/nik/update/{{ $nik->id }}" method="POST">
                    @csrf
                 <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama" class="form-control" value="{{ $nik->nama }}">
                 </div>
                 <div class="form-group">
                    <label for="">NIK</label>
                    <input type="text" name="nik" class="form-control" value="{{ $nik->nik }}">
                 </div>
                 <button type="submit" class="btn btn-primary">Update</button>
                 <a onclick="return confirm('Yakin hapus?')" href="/admin/nik/delete/{{ $nik->id }}" class="btn btn-danger">Hapus</a>
                </form>
              </div>
            </div>
        </div>
    </section>
</div>    
@endsection