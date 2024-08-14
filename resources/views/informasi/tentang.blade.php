@extends('layouts.app')
@section('content')
@include('components.bard')
  <section class="section service-2">
      <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-6 ">
                <div class="department-block mb-5">
                    {{-- <img src="{{ asset('storage/'.$post->image) }}" alt="" class="img-fluid w-100 rounded"> --}}
                    <div class="content">
                        <h3>Tentang kami desa Pematang Sukaramah</h3>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </div>
                </div>
            </div>
          </div>
      </div>
  </section>
@endsection