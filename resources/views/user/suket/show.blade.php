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
                                @if ($suket->kategorisuket->slug == 'surat-keterangan-usaha')
                                <label class="mt-3" for="">Nama usaha</label>
                            <input type="text" class="form-control" value="{{ $suket->nama_usaha }}">
                            @elseif ($suket->kategorisuket->slug == 'surat-kehilangan')
                            <label class="mt-3" for="">Barang yang hilang</label>
                            <input type="text" class="form-control" value="{{ $suket->barang_hilang }}">
                            @elseif ($suket->kategorisuket->slug == 'surat-keterangan-nikah')
                            <label class="mt-3" for="">Nama calon mempelai pria</label>
                            <input type="text" class="form-control" value="{{ $suket->nama_catin_pria }}">
                            <label class="mt-3" for="">Tempat tanggal lahir calon mempelai pria</label>
                            <input type="text" class="form-control" value="{{ $suket->ttl_catin_pria }}">
                            <label class="mt-3" for="">Pekerjaan calon mempelai pria</label>
                            <input type="text" class="form-control" value="{{ $suket->pekerjaan_catin_pria }}">
                            <label class="mt-3" for="">Alamat calon mempelai pria</label>
                            <input type="text" class="form-control" value="{{ $suket->alamat_catin_pria }}">
                            
                            <label class="mt-3" for="">Nama calon mempelai wanita</label>
                            <input type="text" class="form-control" value="{{ $suket->nama_catin_wanita }}">
                            <label class="mt-3" for="">Tempat tanggal lahir calon mempelai wanita</label>
                            <input type="text" class="form-control" value="{{ $suket->ttl_catin_wanita }}">
                            <label class="mt-3" for="">Pekerjaan calon mempelai wanita</label>
                            <input type="text" class="form-control" value="{{ $suket->pekerjaan_catin_wanita }}">
                            <label class="mt-3" for="">Alamat calon mempelai wanita</label>
                            <input type="text" class="form-control" value="{{ $suket->alamat_catin_wanita }}">
                            @elseif($suket->kategorisuket->slug == 'surat-keterangan-tidak-mampu')
                            <label class="mt-3" for="">Nama pemohon dispensasi</label>
                            <input type="text" class="form-control" value="{{ $suket->nama_pemohon_dispenasasi }}">
                            <label class="mt-3" for="">Tempat tanggal lahir pemohon dispensasi</label>
                            <input type="text" class="form-control" value="{{ $suket->ttl_pemohon_dispenasasi }}">
                            <label class="mt-3" for="">Jenis kelamin pemohon dispensasi</label>
                            <input type="text" class="form-control" value="{{ $suket->jenis_kelamin_pemohon_dispenasasi }}">
                            <label class="mt-3" for="">Pekerjaan pemohon dispensasi</label>
                            <input type="text" class="form-control" value="{{ $suket->pekerjaan_pemohon_dispenasasi }}">
                            <label class="mt-3" for="">Alamat pemohon dispensasi</label>
                            <input type="text" class="form-control" value="{{ $suket->alamat_pemohon_dispenasasi }}">
                            @endif
                            <label class="mt-3" for="">Keterangan</label>
                            <textarea class="form-control">{{ $suket->keterangan }}</textarea>
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
