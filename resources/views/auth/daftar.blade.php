@extends('layouts.app')
@section('content')
@include('components.bard')
<section class="appoinment section">
    <div class="container">
      <div class="row text-center justify-content-center">
        <div class="col-lg-6">
             <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">
              @if (session('success'))
              <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Berhahsil</h4>
                <p>{{ session('success') }}</p>
              </div>
              @endif
              <p class="mb-4">Silakan lengkapi data diri Anda pada form dibawah ini</p>
                 <form class="appoinment-form" method="post" action="/daftar">
                  @csrf
                      <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input name="nik" type="text" class="form-control" placeholder="NIK">
                            </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="form-group">
                              <input name="nama" type="text" class="form-control" placeholder="Nama Lengkap">
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="form-group">
                              <input name="password" type="text" class="form-control" placeholder="Password">
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="form-group">
                              <input name="no_tlp" type="text" class="form-control" placeholder="No Tlp/WhatsApp">
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="form-group">
                              <input name="alamat" type="text" class="form-control" placeholder="Alamat">
                          </div>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-main btn-round-full mb-2" href="confirmation.html">Daftar sekarang <use Illuminate\Support\Facades\Hash;i class="icofont-simple-right ml-2"></use></button>
                      <p>Belum punya akun? <a href="{{ route('daftar') }}">daftar disini</a></p>
                  </form>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection