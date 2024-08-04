@extends('layouts.main')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-12">
                    <div class="card">
                        <form action="/user/pengaduan/update/{{ $suket->id }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-header">
                                <h4>Detail permohonan surat</h4>
                            </div>
                            @if (session('success'))
                            <div class="alert alert-warning" role="alert">
                               {{ session('success') }}
                            </div>
                            @endif
                
                        </form>
                        <form id="delete-form" action="/user/pengaduan/delete/{{ $suket->id }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="card-body">
                                <div class="row">
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
                        <div class="card-body d-flex align-items-center">
                            <h4 class="mb-0">Surat balasan</h4>
                            <span class="ml-auto badge badge-primary">{{ $suket->status }}</span>
                        </div>
                        @isset($suket->file_suket)
                        <div class="mt-3">
                            <embed src="{{ asset('storage/'.$suket->file_suket) }}" width="100%" height="500" type="application/pdf">
                        </div>
                        @endisset
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
