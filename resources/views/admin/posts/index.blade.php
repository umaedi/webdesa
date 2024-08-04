@extends('layouts.admin')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
            <div class="card">
              <div class="card-header">
                <h4>Informasi</h4>
                <div class="section-header-button ml-auto">
                    <a href="/admin/posts/create" class="btn btn-primary">Tambah informasi baru</a>
                  </div>
              </div>
              @if (session('success'))
              <div class="alert alert-warning" role="alert">
                 {{ session('success') }}
              </div>
              @endif
              <div class="card-body">
                  <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Judul</th>
                          <th scope="col">Kategori</th>
                          <th scope="col">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                          @forelse ($posts as $key => $item)
                          <tr>
                              <th scope="row">{{ $key + 1 }}</th>
                              <td>{{ $item->judul }}</td>
                              <td>{{ $item->category->name }}</td>
                              <td><a href="/admin/posts/{{ $item->id }}/edit"><span class="badge badge-primary">Lihat</span></a></td>
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