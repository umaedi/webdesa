@extends('layouts.admin')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
            <div class="card">
              <div class="card-header">
                <h4>Kategori informasi</h4>
                <div class="section-header-button ml-auto">
                  <a href="/admin/kategori/create" class="btn btn-primary">Tambah kategori</a>
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
                          <th scope="col">Nama kategori</th>
                          <th scope="col">slug</th>
                          <th scope="col">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                          @forelse ($categories as $key => $item)
                          <tr>
                              <th scope="row">{{ $key + 1 }}</th>
                              <td>{{ $item->name }}</td>
                              <td>{{ $item->slug }}</td>
                              <td><a href="/admin/kategori/show/{{ $item->id }}"><span class="badge badge-primary">Lihat</span></a></td>
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