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
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="">Tempat Tanggal Lahir</label>
                                            <input type="text" class="form-control" value="{{ $suket->user->ttl }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="">Jenis Kelamin</label>
                                            <input type="text" class="form-control" value="{{ $suket->user->jenis_kelamin }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="">Status</label>
                                            <input type="text" class="form-control" value="{{ $suket->user->status }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="">Pekerjaan</label>
                                            <input type="text" class="form-control" value="{{ $suket->user->pekerjaan }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="">Agama</label>
                                            <input type="text" class="form-control" value="{{ $suket->user->agama }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="">Alamat</label>
                                            <input type="text" class="form-control" value="{{ $suket->user->alamat }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row mt-3">
                                <div class="col-md-4">
                                    <a href="{{ asset('storage/'.$suket->kk) }}">
                                        <img src="{{ asset('storage/'.$suket->kk) }}" alt="lampiran" width="100%">
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{ asset('storage/'.$suket->ktp) }}">
                                        <img src="{{ asset('storage/'.$suket->ktp) }}" alt="lampiran" width="100%">
                                    </a>
                                </div>

                                @if ($suket->kategorisuket->slug == 'surat-kehilangan')
                                <div class="col-md-4">
                                    <a href="{{ asset('storage/'.$suket->suket_bukti_hilang) }}">
                                        <img src="{{ asset('storage/'.$suket->suket_bukti_hilang) }}" alt="lampiran" width="100%">
                                    </a>
                                </div>
                                @endif

                                @if ($suket->kategorisuket->slug == 'surat-keterangan-nikah')
                                <div class="col-md-4">
                                    <a href="{{ asset('storage/'.$suket->kk_wanita) }}">
                                        <img src="{{ asset('storage/'.$suket->kk_wanita) }}" alt="lampiran" width="100%">
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{ asset('storage/'.$suket->ktp_wanita) }}">
                                        <img src="{{ asset('storage/'.$suket->ktp_wanita) }}" alt="lampiran" width="100%">
                                    </a>
                                </div>
                                @endif

                                @if ($suket->kategorisuket->slug == 'surat-keterangan-tidak-mampu')
                                <div class="col-md-4">
                                    <a href="{{ asset('storage/'.$suket->suket_tidak_mampu) }}">
                                        <img src="{{ asset('storage/'.$suket->suket_tidak_mampu) }}" alt="lampiran" width="100%">
                                    </a>
                                </div>
                                @endif

                            </div>
                            @if ($suket->kategorisuket->slug == 'surat-keterangan-usaha')
                            <label class="mt-3" for="">Nama usaha</label>
                            <input type="text" class="form-control mt-3" value="{{ $suket->nama_usaha }}">
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
