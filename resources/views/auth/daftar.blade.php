@extends('layouts.app')
@section('content')
@include('components.bard')
<section class="appoinment section">
    <div class="container">
      <div class="row  justify-content-center">
        <div class="col-lg-6">
             <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">
              @if (session('success'))
              <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Berhahsil</h4>
                <p>{{ session('success') }}</p>
              </div>
              @endif
              @if (session('error'))
              <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">Gagal</h4>
                <p>{{ session('error') }}</p>
              </div>
              @endif
              <p class="mb-4">Silakan lengkapi data diri Anda pada form dibawah ini</p>
                 <form class="appoinment-form" method="post" action="/daftar">
                  @csrf
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="form-group">
                            <label for="" class="label">NIK</label>
                            <input type="text" class="form-control" name="nik">
                        </div>
                        <div class="form-group">
                            <label for="" class="label">Nama</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="" class="label">Tempat Tanggal Lahir</label>
                            <input type="date" class="form-control" name="ttl">
                        </div>
                        <div class="form-group">
                            <label for="" class="label">Jenis Kelamin</label>
                            <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                              <option value="Laki-Laki">Laki-Laki</option>
                              <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" class="label">Status</label>
                            <input type="text" class="form-control" name="status">
                        </div>
                        <div class="form-group">
                            <label for="" class="label">Pekerjaan</label>
                            <input type="text" class="form-control" name="pekerjaan">
                        </div>
                        <div class="form-group">
                            <label for="" class="label">Agama</label>
                            <input type="text" class="form-control" name="agama">
                        </div>
                        <div class="form-group">
                            <label for="" class="label">Alamat</label>
                            <input type="text" class="form-control" name="alamat">
                        </div>
                        <div class="form-group">
                            <label for="" class="label">No Telepon/WhatsApp</label>
                            <input type="text" class="form-control" name="no_tlp">
                        </div>
                        <div class="form-group">
                            <label for="" class="label">Password</label>
                            <input type="text" class="form-control" name="password">
                        </div>
                        </div>
                      </div>
                      <div class="text-center">
                        <button type="submit" class="btn btn-main btn-round-full mb-2">Daftar sekarang <use Illuminate\Support\Facades\Hash;i class="icofont-simple-right ml-2"></use></button>
                        <p>Sudah punya akun? <a href="{{ route('login') }}">login disini</a></p>
                      </div>
                  </form>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection