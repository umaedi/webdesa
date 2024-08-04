@extends('layouts.app')
@section('content')
@include('components.bard')
<section class="section blog-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
	<div class="col-lg-12 mb-5">
		<div class="single-blog-item">
			<img src="{{ asset('storage/'.$post->image) }}" alt="" class="img-fluid">

			<div class="blog-item-content mt-5">
				<div class="blog-item-meta mb-3">
					<span class="text-color-2 text-capitalize mr-3"><i class="icofont-book-mark mr-2"></i> {{ $post->category->name }}</span>
					{{-- <span class="text-muted text-capitalize mr-3"><i class="icofont-comment mr-2"></i>5 Comments</span> --}}
					<span class="text-black text-capitalize mr-3"><i class="icofont-calendar mr-2"></i>{{ \Carbon\Carbon::parse($post->created_at)->locale('id_ID')->isoFormat('dddd, D MMMM YYYY') }}</span>
				</div> 

				<h2 class="mb-4 text-md"><a href="#">{{ $post->judul }}</a></h2>

				<p class="lead mb-4">{!! $post->body !!}</p>


				{{-- <div class="mt-5 clearfix">
				    <ul class="float-left list-inline tag-option"> 
				    	<li class="list-inline-item"><a href="#">Advancher</a></li>
				    	<li class="list-inline-item"><a href="#">Landscape</a></li>
				    	<li class="list-inline-item"><a href="#">Travel</a></li>
				   	</ul>         --}}
{{-- 
				    <ul class="float-right list-inline">
				        <li class="list-inline-item"> Share: </li>
				        <li class="list-inline-item"><a href="#" target="_blank"><i class="icofont-facebook" aria-hidden="true"></i></a></li>
				        <li class="list-inline-item"><a href="#" target="_blank"><i class="icofont-twitter" aria-hidden="true"></i></a></li>
				        <li class="list-inline-item"><a href="#" target="_blank"><i class="icofont-pinterest" aria-hidden="true"></i></a></li>
				        <li class="list-inline-item"><a href="#" target="_blank"><i class="icofont-linkedin" aria-hidden="true"></i></a></li>
				    </ul> --}}
			    {{-- </div> --}}
			</div>
		</div>
	</div>
</div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar-wrap pl-lg-4 mt-5 mt-lg-0">
	{{-- <div class="sidebar-widget search  mb-3 ">
		<h5>Search Here</h5>
		<form action="#" class="search-form">
			<input type="text" class="form-control" placeholder="search">
			<i class="ti-search"></i>
		</form>
	</div> --}}


	<div class="sidebar-widget latest-post mb-3">
		<h5>Trending</h5>

        @foreach ($popularPosts as $post)
        <div class="py-2">
        	<span class="text-sm text-muted">{{ \Carbon\Carbon::parse($post->created_at)->locale('id_ID')->isoFormat('dddd, D MMMM YYYY') }}</span>
            <h6 class="my-2"><a href="#">{{ $post->judul }}</a></h6>
        </div>
        @endforeach
	</div>

	<div class="sidebar-widget category mb-3">
		<h5 class="mb-4">Kategori informasi</h5>

		<ul class="list-unstyled">
            @foreach($categories as $category)
            <li class="align-items-center">
                <a href="#">{{ $category->name }}</a>
                <span>({{ $category->posts_count }})</span>
            </li>
            @endforeach
		</ul>
	</div>

{{-- 
	<div class="sidebar-widget tags mb-3">
		<h5 class="mb-4">Tags</h5>

		<a href="#">Doctors</a>
		<a href="#">agency</a>
		<a href="#">company</a>
		<a href="#">medicine</a>
		<a href="#">surgery</a>
		<a href="#">Marketing</a>
		<a href="#">Social Media</a>
		<a href="#">Branding</a>
		<a href="#">Laboratory</a>
	</div> --}}


	{{-- <div class="sidebar-widget schedule-widget mb-3">
		<h5 class="mb-4">Time Schedule</h5>

		<ul class="list-unstyled">
		  <li class="d-flex justify-content-between align-items-center">
		    <a href="#">Monday - Friday</a>
		    <span>9:00 - 17:00</span>
		  </li>
		  <li class="d-flex justify-content-between align-items-center">
		    <a href="#">Saturday</a>
		    <span>9:00 - 16:00</span>
		  </li>
		  <li class="d-flex justify-content-between align-items-center">
		    <a href="#">Sunday</a>
		    <span>Closed</span>
		  </li>
		</ul>

		<div class="sidebar-contatct-info mt-4">
			<p class="mb-0">Need Urgent Help?</p>
			<h3>+23-4565-65768</h3>
		</div>
	</div> --}}

</div>
            </div>   
        </div>
    </div>
</section>
@endsection