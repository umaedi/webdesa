@extends('layouts.admin')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
            <div class="card">
              <div class="card-header">
                <h4>Tambah data NIK</h4>
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
                <form action="/admin/nik/store" method="POST">
                    @csrf
                 <div class="form-group">
                    <label for="">NIK</label>
                    <input type="text" name="nik" class="form-control">
                 </div>
                 <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama" class="form-control">
                 </div>
                 <button type="submit" class="btn btn-primary">Tambah data NIK</button>
                </form>
              </div>
            </div>
        </div>
    </section>
</div>    
@endsection