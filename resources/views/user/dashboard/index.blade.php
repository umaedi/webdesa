@extends('layouts.main')
@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Dashboard</h1>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
              <i class="far fa-user"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Suket</h4>
              </div>
              <div class="card-body">
                {{ $count_suket }}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-danger">
              <i class="far fa-newspaper"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Pengaduan</h4>
              </div>
              <div class="card-body">
                {{ $count_pengaduan }}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-warning">
              <i class="far fa-file"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Kritik & Saran</h4>
              </div>
              <div class="card-body">
                {{ $count_kritik }}
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
          <div class="card">
            <div class="card-header">
              <h4>Permohonan surat</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Kategori surat</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($suket as $key => $item)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ date('d-m-Y', strtotime($item->created_at)); }}</td>
                            <td>{{ $item->kategorisuket->kategori_suket }}</td>
                            <td><span class="badge badge-warning">{{ $item->status }}</span></td>
                            <td><a href="/user/suket/show/{{ $item->id }}"><span class="badge badge-primary">Lihat</span></a></td>
                          </tr>
                        @empty
                        <tr class="text-center">
                            <th colspan="6">
                                <p>Belum ada data</p>
                            </th>
                        </tr>
                        @endforelse
         
                    </tbody>
                  </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection