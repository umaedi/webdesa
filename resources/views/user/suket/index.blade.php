@extends('layouts.main')
@section('content')
<div class="main-content">
    <section class="section">
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
    </section>
</div>    
@endsection