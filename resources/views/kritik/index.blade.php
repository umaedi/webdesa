@extends('layouts.app')
@section('content')
@include('components.bard')
<section class="appoinment section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
            <div class="mt-3">
              <div class="feature-icon mb-3">
                <i class="icofont-support text-lg"></i>
              </div>
               <span class="h3">Nomor Telepon Desa</span>
                <h2 class="text-color mt-3">+84 789 1256 </h2>
            </div>
        </div>
  
        <div class="col-lg-8">
             <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">
                @if (session('success'))
                <div class="alert alert-success" role="alert">
                  <h4 class="alert-heading">Berhasil</h4>
                  <p>{{ session('success') }}</p>
                </div>
                @endif
              <h2 class="mb-2 title-color">Kritik & Saran</h2>
              <p class="mb-4">Silakan sampaikan kiritik dan saran Anda untuk kami. Kami sangat menghargai kritik dan saran Anda untuk kelebih baikan kami dalam menjalankan tanggung jawab</p>
                 <form class="appoinment-form" method="post" action="{{ route('kritik.store') }}">
                    @csrf
                      <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nama anda: {{ auth()->user()->nama }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="NIK: {{ auth()->user()->nik }}">
                            </div>
                        </div>
                      </div>
                      <div class="form-group-2 mb-4">
                          <textarea name="kritik" id="message" class="form-control" rows="6" placeholder="Kritik dan saran"></textarea>
                      </div>
                      <button type="submit" class="btn btn-main btn-round-full">Kirim kritik & saran<i class="icofont-simple-right ml-2"></i></button>
                  </form>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection