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
              <h2 class="mb-2 title-color">{{ $title }}</h2>
              <p class="mb-4">Silakan mengajukan permohonan dengan mengisi form dibawah ini. Kami menghargai Anda dan akan segera membalasnya!</p>
                 <form class="appoinment-form" method="post" action="/suket/store" enctype="multipart/form-data">
                  @csrf
                      <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="hidden" name="kategorisuket_id" value="{{ $kategorisuket_id }}">
                                <label for="" class="label">Nama</label>
                                <input type="text" class="form-control" placeholder="{{ auth()->user()->nama }}" readonly>
                            </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                                <label class="label" for="">Upload FC Kartu Keluarga</label>
                              <input name="kk" type="file" class="form-control" placeholder="Judul pengduan">
                              @error('kk')
                              <em style="color: red">{{ $message }}</em>
                              @enderror
                          </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="label">NIK</label>
                                <input type="text" class="form-control" placeholder="{{ auth()->user()->nik }}" readonly>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                                  <label class="label" for="">Upload FC KTP</label>
                                <input name="ktp" type="file" class="form-control" placeholder="Judul pengduan">
                                @error('ktp')
                                <em style="color: red">{{ $message }}</em>
                                @enderror
                            </div>
                          </div>
                      </div>
                      <button type="submit" class="btn btn-main btn-round-full">Kirim permohonan<i class="icofont-simple-right ml-2"></i></button>
                  </form>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection