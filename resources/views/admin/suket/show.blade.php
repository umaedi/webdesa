@extends('layouts.admin')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>{{ $title }}</h4>
                        </div>
                    </div>
                    <div class="card">
                        @if (session('success'))
                        <div class="alert alert-warning" role="alert">
                            {{ session('success') }}
                        </div>
                        @endif
                        <div class="card-body">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="">Nama</label>
                                            <input type="text" class="form-control" value="{{ $suket->user->nama }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="">NIK</label>
                                            <input type="text" class="form-control" value="{{ $suket->user->nik }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="">No Telepon</label>
                                            <input type="text" class="form-control" value="{{ $suket->user->no_tlp }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="">Alamat</label>
                                            <input type="text" class="form-control" value="{{ $suket->user->alamat }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <a href="{{ asset('storage/'.$suket->kk) }}">
                                            <img src="{{ asset('storage/'.$suket->kk) }}" alt="lampiran" width="100%">
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{ asset('storage/'.$suket->ktp) }}">
                                            <img src="{{ asset('storage/'.$suket->ktp) }}" alt="lampiran" width="100%">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <h4 class="mb-0">Surat balasan</h4>
                                <span class="ml-auto badge badge-primary">{{ $suket->status }}</span>
                            </div>
                            <form action="/admin/suket/update/{{ $suket->id }}" enctype="multipart/form-data" method="POST">
                                @method('PUT')
                                @csrf
                                <input type="file" class="form-control" name="file_suket" id="">
                                <button type="submit" class="btn btn-primary mt-3">Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
