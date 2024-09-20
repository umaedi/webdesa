<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
  <meta name="author" content="themefisher.com">

  <title>{{ $title ?? 'Website Desa Pematang Sukaramah' }}</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('novena') }}/images/favicon.ico" />

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="{{ asset('novena') }}/plugins/bootstrap/css/bootstrap.min.css">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="{{ asset('novena') }}/plugins/icofont/icofont.min.css">
  <!-- Slick Slider  CSS -->
  <link rel="stylesheet" href="{{ asset('novena') }}/plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="{{ asset('novena') }}/plugins/slick-carousel/slick/slick-theme.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{ asset('css') }}/style.css">

</head>

<body id="top">

<header>
	<nav class="navbar navbar-expand-lg navigation" id="navbar">
		<div class="container">
		 	 <a class="navbar-brand" href="{{ route('home') }}">
                <h3>Pematang Sukaramah</h3>
			  </a>

		  	<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
			<span class="icofont-navigation-menu"></span>
		  </button>
	  
		  <div class="collapse navbar-collapse" id="navbarmain">
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item active">
				<a class="nav-link" href="{{ route('home') }}">Beranda</a>
			  </li>
			   <li class="nav-item"><a class="nav-link" href="{{ route('informasi') }}">Informasi</a></li>
			   <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pelayanan Publik<i class="icofont-thin-down"></i></a>
				<ul class="dropdown-menu" aria-labelledby="dropdown02">
					@foreach ($sukets as $item)
					<li><a class="dropdown-item" href="{{ route('suket', ['id' => $item->slug]) }}">{{ $item->kategori_suket }}</a></li>
					@endforeach
					<li><a class="dropdown-item" href="{{ route('pengaduan') }}">Pengaduan</a></li>
				</ul>
			  </li>
			   <li class="nav-item"><a class="nav-link" href="{{ route('kritik') }}">Kritik & Saran</a></li>
			   <li class="nav-item"><a class="nav-link" href="{{ route('kontak') }}">Kontak kami</a></li>
			   @auth
			   @if (auth()->user()->role == 'user')
			   <a href="{{ route('user.dashboard') }}" class="btn btn-main btn-round-full">Dashboard</a>
			   @else
			   <a href="{{ route('admin.dashboard') }}" class="btn btn-main btn-round-full">Dashboard</a>
			   @endif
			   @else
			   <a href="{{ route('login') }}" class="btn btn-main btn-round-full">Login</a>
			   @endauth
			</ul>
		  </div>
		</div>
	</nav>
</header>
@yield('content')
<!-- footer Start -->
<footer class="footer section gray-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 mr-auto col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<div class="logo mb-4">
						<h3>Desa Pematang Sukaramah</h3>
						{{-- <img src="images/logo.png" alt="" class="img-fluid"> --}}
					</div>
					<p>Tempora dolorem voluptatum nam vero assumenda voluptate, facilis ad eos obcaecati tenetur veritatis eveniet distinctio possimus.</p>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Pintasan</h4>
					<div class="divider mb-4"></div>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="#">Beranda</a></li>
						<li><a href="#">Informasi</a></li>
						<li><a href="#">Pengaduan</a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="widget widget-contact mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Kontak</h4>
					<div class="divider mb-4"></div>

					<div class="footer-contact-block mb-4">
						<div class="icon d-flex align-items-center">
							<i class="icofont-email mr-3"></i>
							<span class="h6 mb-0">email</span>
						</div>
						<h6 class="mt-2"><a href="tel:+23-345-67890">umaedi.kh.99@gmail.com</a></h6>
					</div>

					<div class="footer-contact-block">
						<div class="icon d-flex align-items-center">
							<i class="icofont-support mr-3"></i>
							<span class="h6 mb-0">Telepon</span>
						</div>
						<h6 class="mt-2"><a href="tel:+23-345-67890">085741492045</a></h6>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

   

    <!-- 
    Essential Scripts
    =====================================-->

    
    <!-- Main jQuery -->
    <script src="{{ asset('novena') }}/plugins/jquery/jquery.js"></script>
    <!-- Bootstrap 4.3.2 -->
    <script src="{{ asset('novena') }}/plugins/bootstrap/js/popper.js"></script>
    <script src="{{ asset('novena') }}/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ asset('novena') }}/plugins/counterup/jquery.easing.js"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('novena') }}/plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Counterup -->
    <script src="{{ asset('novena') }}/plugins/counterup/jquery.waypoints.min.js"></script>
    
    <script src="{{ asset('novena') }}/plugins/shuffle/shuffle.min.js"></script>
    <script src="{{ asset('novena') }}/plugins/counterup/jquery.counterup.min.js"></script>
    <!-- Google Map -->
    
    <script src="{{ asset('novena') }}/js/script.js"></script>
    <script src="{{ asset('novena') }}/js/contact.js"></script>

  </body>
  </html>
   