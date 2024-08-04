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
              @if (session('error'))
              <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Gagal!</h4>
                <p>{{ session('error') }}</p>
              </div>
              @endif
              <h2 class="mb-2 title-color">Login</h2>
              <p class="mb-4">Silakan login menggunakan NIK dan Password Anda</p>
                 <form class="appoinment-form" method="post" action="/auth">
                  @csrf
                      <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input name="nik" type="text" class="form-control" placeholder="NIK">
                            </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="form-group">
                              <input name="password" type="text" class="form-control" placeholder="Password">
                          </div>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-main btn-round-full mb-2" href="confirmation.html">Login<i class="icofont-simple-right ml-2"></i></button>
                      <p>Belum punya akun? <a href="{{ route('daftar') }}">daftar disini</a></p>
                  </form>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection