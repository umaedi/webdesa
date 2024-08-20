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
                      <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="label">NIK</label>
                                <input type="text" class="form-control" placeholder="{{ auth()->user()->nik }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="" class="label">Nama</label>
                                <input type="text" class="form-control" placeholder="{{ auth()->user()->nama }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="" class="label">Tempat Tanggal Lahir</label>
                                <input type="text" class="form-control" placeholder="{{ auth()->user()->ttl }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="" class="label">Jenis Kelamin</label>
                                <input type="text" class="form-control" placeholder="{{ auth()->user()->jenis_kelamin }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="" class="label">Status</label>
                                <input type="text" class="form-control" placeholder="{{ auth()->user()->status }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="" class="label">Pekerjaan</label>
                                <input type="text" class="form-control" placeholder="{{ auth()->user()->pekerjaan }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="" class="label">Agama</label>
                                <input type="text" class="form-control" placeholder="{{ auth()->user()->agama }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="" class="label">Alamat</label>
                                <input type="text" class="form-control" placeholder="{{ auth()->user()->alamat }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="" class="label">No Telepon/WhatsApp</label>
                                <input type="text" class="form-control" placeholder="{{ auth()->user()->no_tlp }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                          <form method="post" action="/suket/store" enctype="multipart/form-data">
                            @csrf
                            @if ($slug == 'surat-keterangan-nikah')
                            <div class="form-group">
                              <label for="" class="label">Foto Copy KK calon mempelai pria</label>
                              <input type="hidden" name="kategorisuket_id" value="{{ $kategorisuket_id }}">
                              <input type="file" class="form-control" name="kk">
                              @error('kk')
                              <span style="color: red">{{ $message }}</span>
                              @enderror
                            </div>
                            <div class="form-group">
                              <label for="" class="label">Foto Copy KTP calon mempelai pria</label>
                              <input type="file" class="form-control" name="ktp">
                              @error('ktp')
                              <span style="color: red">{{ $message }}</span>
                              @enderror
                            </div>
                            <div class="form-group">
                              <label for="" class="label">Foto Copy KK calon mempelai wanita</label>
                              <input type="hidden" name="kategorisuket_id" value="{{ $kategorisuket_id }}">
                              <input type="file" class="form-control" name="kk_wanita">
                              @error('kk')
                              <span style="color: red">{{ $message }}</span>
                              @enderror
                            </div>
                            <div class="form-group">
                              <label for="" class="label">Foto Copy KTP calon mempelai wanita</label>
                              <input type="file" class="form-control" name="ktp_wanita">
                              @error('ktp')
                              <span style="color: red">{{ $message }}</span>
                              @enderror
                            </div>
                            @else
                            <div class="form-group">
                              <label for="" class="label">Foto Copy KK </label>
                              <input type="hidden" name="kategorisuket_id" value="{{ $kategorisuket_id }}">
                              <input type="file" class="form-control" name="kk">
                              @error('kk')
                              <span style="color: red">{{ $message }}</span>
                              @enderror
                            </div>
                            <div class="form-group">
                              <label for="" class="label">Foto Copy KTP</label>
                              <input type="file" class="form-control" name="ktp">
                              @error('ktp')
                              <span style="color: red">{{ $message }}</span>
                              @enderror
                            </div>
                            @endif
                            @if ($slug == 'surat-keterangan-usaha')
                              <div class="form-group">
                                <label for="" class="label">Bukti usaha</label>
                                <input type="file" class="form-control" name="suket_usaha" required>
                              </div>
                              <div class="form-group">
                                <label for="" class="label">Nama Usaha</label>
                                <input type="text" class="form-control" name="nama_usaha" required>
                              </div>
                            @elseif ($slug == 'surat-kehilangan')
                            <div class="form-group">
                              <label for="" class="label">Surat bukti kehilangan</label>
                              <input type="file" class="form-control" name="suket_bukti_hilang" required>
                            </div>
                            <div class="form-group">
                              <label for="" class="label">Barang yang hilang</label>
                              <input type="text" class="form-control" name="barang_hilang" required>
                            </div>
                            @elseif ($slug == 'surat-keterangan-nikah')
                            <div class="form-group">
                              <label for="" class="label">Nama calon mempelai pria</label>
                              <input type="text" class="form-control" name="nama_catin_pria" required>
                            </div>
                            <div class="form-group">
                              <label for="" class="label">Tempat tanggal lahir calon mempelai pria</label>
                              <input type="text" class="form-control" name="ttl_catin_pria" required>
                            </div>
                            <div class="form-group">
                              <label for="" class="label">Pekerjaan calon mempelai pria</label>
                              <input type="text" class="form-control" name="pekerjaan_catin_pria" required>
                            </div>
                            <div class="form-group">
                              <label for="" class="label">Alamat calon mempelai pria</label>
                              <input type="text" class="form-control" name="alamat_catin_pria" required>
                            </div>
                            <div class="form-group">
                              <label for="" class="label">Nama calon mempelai wanita</label>
                              <input type="text" class="form-control" name="nama_catin_wanita" required>
                            </div>
                            <div class="form-group">
                              <label for="" class="label">Tempat tanggal lahir calon mempelai wanita</label>
                              <input type="text" class="form-control" name="ttl_catin_wanita" required>
                            </div>
                            <div class="form-group">
                              <label for="" class="label">Pekerjaan calon mempelai wanita</label>
                              <input type="text" class="form-control" name="pekerjaan_catin_wanita" required>
                            </div>
                            <div class="form-group">
                              <label for="" class="label">Alamat calon mempelai wanita</label>
                              <input type="text" class="form-control" name="alamat_catin_wanita" required>
                            </div>
                            @elseif( $slug =='surat-keterangan-tidak-mampu')
                            <div class="form-group">
                              <label for="" class="label">Surat keterangan tidak mampu</label>
                              <input type="file" class="form-control" name="suket_tidak_mampu" required>
                            </div>
                            <div class="form-group">
                              <label for="" class="label">Nama pemohon dispensasi</label>
                              <input type="text" class="form-control" name="nama_pemohon_dispenasasi" required>
                            </div>
                            <div class="form-group">
                              <label for="" class="label">Tempat tanggal lahir pemohon dispensasi</label>
                              <input type="text" class="form-control" name="ttl_pemohon_dispenasasi" required>
                            </div>
                            <div class="form-group">
                              <label for="" class="label">Jenis kelamin pemohon dispensasi</label>
                              <input type="text" class="form-control" name="jenis_kelamin_pemohon_dispenasasi" required>
                            </div>
                            <div class="form-group">
                              <label for="" class="label">Pekerjaan pemohon dispensasi</label>
                              <input type="text" class="form-control" name="pekerjaan_pemohon_dispenasasi" required>
                            </div>
                            <div class="form-group">
                              <label for="" class="label">Alamat pemohon dispensasi</label>
                              <input type="text" class="form-control" name="alamat_pemohon_dispenasasi" required>
                            </div>
                            @endif
                            <div class="form-group">
                              <label for="" class="label">Keterangan (opsional)</label>
                              <textarea type="text" class="form-control" name="keterangan"></textarea>
                            </div>
                          <button type="submit" class="btn btn-main btn-round-full">Kirim permohonan<i class="icofont-simple-right ml-2"></i></button>
                          </div>
                      </form>
                    </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection