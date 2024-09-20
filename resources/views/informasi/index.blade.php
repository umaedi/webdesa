@extends('layouts.app')
@section('content')
@include('components.bard')
  <section class="section service-2">
      <div class="container">
          <div class="row">
            @foreach ($posts as $post)
            <div class="col-lg-4 col-md-12">
                <div class="department-block mb-5">
                    <img src="{{ asset('storage/'.$post->image) }}" alt="" class="img-fluid w-100 rounded">
                    <div class="content">
                        <h4 class="mt-4 mb-2 title-color">{{ $post->judul }}</h4>
                        <p class="mb-4">{{ $post->deskripsi }}</p>
                        <a href="/informasi/detail/{{ $post->slug }}" class="read-more">Selengkapnya  <i class="icofont-simple-right ml-2"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
          </div>
      </div>
  </section>
@endsection