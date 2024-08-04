@extends('layouts.app')
@section('content')
@include('components.bard')
<section class="appoinment section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
             <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">
              @if (session('success'))
              <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Berhasil</h4>
                <p>{{ session('success') }}</p>
              </div>
              @endif
              <h2 class="mb-2 title-color">Buat pengaduan</h2>
              <p class="mb-4">Silakan buat pengaduan Anda dengan mengisi form dibawah ini. Kami menghargai pengaduan Anda dan akan segera membalasnya!</p>
                 <form class="appoinment-form" method="post" action="/pengaduan/store">
                  @csrf
                      <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nama: {{ auth()->user()->nama }}" readonly>
                            </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                              <input name="judul_pengaduan" type="text" class="form-control" placeholder="Judul pengduan">
                          </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="NIK: {{ auth()->user()->nik }}" readonly>
                            </div>
                          </div>
                 
                          <div class="col-lg-6">
                              <div class="form-group">
                                  <select name="kategori_pengaduan_id" class="form-control" id="exampleFormControlSelect2">
                                    <option>--pilih kategori pengaduan--</option>
                                    @foreach ($categories as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->kategori_pengaduan }}</option>
                                    @endforeach
                                  </select>
                              </div>
                          </div>
                      </div>
                      <div class="form-group-2 mb-4">
                          <textarea name="deskripsi" class="form-control" rows="6categories" placeholder="Jelaskan secara singkat pengaduan Anda"></textarea>
                      </div>
                      <button type="submit" class="btn btn-main btn-round-full" href="confirmation.html">Kirim pengaduan<i class="icofont-simple-right ml-2"></i></button>
                  </form>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection