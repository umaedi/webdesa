@extends('layouts.admin')
@push('css')
     <!-- trix-editor -->
     <link rel="stylesheet" type="text/css" href="{{ asset('trix-editor/trix.css') }}">
     <style>
        span[data-trix-button-group="file-tools"] {
            display: none;
        }
    </style>
@endpush
@section('content')
<div class="main-content">
    <section class="section">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
            <div class="card">
              <div class="card-header">
                <h4>Form informasi</h4>
                <div class="section-header-button ml-auto">
                    <a href="/admin/posts/store" class="btn btn-primary">Kembali</a>
                  </div>
              </div>
              @if (session('success'))
              <div class="alert alert-warning" role="alert">
                 {{ session('success') }}
              </div>
              @endif

              <div class="card-body">
                <form action="/admin/posts/{{ $post->id }}" method="POST" novalidate enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group mb-3">
                        <label for="">Judul</label>
                        <input  id="title" type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ $post->judul }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Slug</label>
                        <input  id="slug" name="slug" type="text" readonly autocomplete="slug" class="form-control @error('slug') is-invalid @enderror" value="{{ $post->slug }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Deskripsi</label>
                        <textarea  id="description" name="deskripsi" type="text"  class="form-control @error('deskripsi') is-invalid @enderror">{{ $post->deskripsi }}</textarea>
                    </div>
                    <label for="">Kategori</label>
                    <div class="form-group mb-3">
                        <select name="category_id" class="form-control">
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ $category->id == $post->category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <label for="">Gambar</label>
                    <div class="form-group mb-3">
                        <input id="image" name="image" type="file" class="form-control @error('image') is-invalid @enderror">
                    </div>
                    <div class="form-group mb-3">
                        <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
                        <trix-editor input="body"></trix-editor>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
              </div>
            </div>
        </div>
    </section>
</div>

@endsection
@push('js')


<script>
    const title = document.getElementById('title');
    const slug = document.getElementById('slug');

    title.addEventListener('change', async function() {
        const res = await fetch(`/admin/posts/slug?${
            new URLSearchParams({title: this.value})
            .toString()
        }`);
        const data = await res.json();
        slug.value = data.slug;
    });
</script>
<!-- trix-editor -->
<script type="text/javascript" src="{{ asset('trix-editor/trix.js') }}"></script>
<script>
    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })
</script>
@endpush