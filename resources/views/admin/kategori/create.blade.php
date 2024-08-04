@extends('layouts.admin')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
            <div class="card">
              <div class="card-header">
                <h4>Tambah kategori</h4>
                <div class="section-header-button ml-auto">
                  <a href="/admin/kategori" class="btn btn-primary">Kembali</a>
                </div>
              </div>
              @if (session('success'))
              <div class="alert alert-warning" role="alert">
                 {{ session('success') }}
              </div>
              @endif
              <div class="card-body">
                <form action="/admin/kategori/store" method="POST">
                    @csrf
                 <div class="form-group">
                    <label for="">Nama kategori</label>
                    <input type="text" name="kategori" class="form-control">
                 </div>
                 <button type="submit" class="btn btn-primary">Tambah kategori</button>
                </form>
              </div>
            </div>
        </div>
    </section>
</div>    
@endsection