@extends('layouts.app')
@section('content')
    <!-- Slider Start -->
<section class="banner">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-xl-7">
				<div class="block">
					<div class="divider mb-3"></div>
					<span class="text-uppercase text-sm letter-spacing text-white">Selamat datang di</span>
					<h1 class="mb-3 mt-3 text-white">Desa Pematang Sukaramah</h1>
					<div class="btn-container ">
						<a href="#" target="_blank" class="btn btn-main-2 btn-icon btn-round-full">Tentang kami <i class="icofont-simple-right ml-2  "></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="features">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="feature-block d-lg-flex">
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-surgeon-alt"></i>
						</div>
						<span>Layanan</span>
						<h4 class="mb-3">Buku tamu</h4>
						<p class="mb-4">Buta janji temu dengan kami</p>
						<a href="#" class="btn btn-main btn-round-full">Buat janji temu</a>
					</div>
				
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-ui-clock"></i>
						</div>
						<span>Waktu pelayanan</span>
						<h4 class="mb-3">Jam Kerja</h4>
						<ul class="w-hours list-unstyled">
		                    <li class="d-flex justify-content-between">Senin - kamis <span>8:00 - 15:30</span></li>
		                    <li class="d-flex justify-content-between">Jumat - Sabtu : <span>8:00 - 15:00</span></li>
		                </ul>
					</div>
				
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-support"></i>
						</div>
						<span>Kontak kami</span>
						<h4 class="mb-3">085741492045</h4>
						<p>Ini adalah nomor telpon desa, kami akan melayani dengan sepenuh hati</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="cta-section mt-5">
	<div class="container">
		<div class="cta position-relative">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="counter-stat">
						<span class="h3">{{ $pengaduan }}</span>
						<p>Total Pengaduan</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="counter-stat">
						<span class="h3">{{ $pengaduan_selesai }}</span>+
						<p>Pengaduan selesai</p>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="counter-stat">
						<span class="h3">{{ $informasi }}</span>+
						<p>Total Informasi</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section appoinment">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 ">
				<div class="appoinment-content">
					<img lazy="loading" src="images/about/kepala_desa.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-6 col-md-10 ">
				<div class="appoinment-wrap mt-5 mt-lg-0">
					<h2 class="mb-2 title-color">Sambutan kepala desa</h2>
					<p class="mb-4">
                        Assalamu’alaikum Wr. Wb.

                        Puji syukur alhamdulillah kami panjatkan ke hadirat Allah SWT atas limpahan rahmat, bimbingan serta karunia-Nya sehingga Website Desa Pematang Sukaramah dapat hadir dihadapan masyarakat luas, khususnya warga Desa Pematang Sukaramah Kecamatan Mesuji Makmur, Kabupaten Ogan Komering Ilir.
                        Website ini dibuat dan dikembangkan dalam rangka memenuhi tuntutan era globalisasi sehingga keberadaan Desa Pematang Sukaramah dapat diketahui oleh masyarakat luas, dan sebagai sarana komunikasi antara seluruh komponen dan stakeholder yang ada di Desa Pematang Sukaramah, untuk kemajuan Desa.
                        Ucapan terima kasih tak lupa kami sampaikan kepada semua pihak yang telah berusaha membangun dan mengembangkan Website Desa Pematang Sukaramah ini, semoga jerih payahnya tidak sia-sia demi membangun dan memajukan Desa Pematang Sukaramah.
                        Akhir kata, kritik dan saran yang membangun untuk kesempurnaan Website Desa Pematang Sukaramah ini, sangat kami harapkan dari segenap pembaca. Semoga keberadaannya memenuhi harapan dan tujuan serta banyak membawa manfaat. Amiin.

                        Wassalamu’alaikum Wr. Wb
                    </p>
            </div>
			</div>
		</div>
	</div>
</section>
<section class="section service gray-bg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7 text-center">
				<div class="section-title">
					<h2>Informasi Desa</h2>
					<div class="divider mx-auto my-4"></div>
					<p>Ini adalah informasi mengenai Desa Pematang Sukaramah</p>
				</div>
			</div>
		</div>

            <div class="row">
				@forelse ($posts as $post)
				<div class="col-lg-4 col-md-6 ">
                    <div class="department-block mb-5">
                        <img lazy="loading" src="{{ asset('storage/'. $post->image) }}" alt="" class="img-fluid w-100 rounded">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">{{ $post->judul }}</h4>
                            <p class="mb-4">{{ $post->deskripsi }}</p>
                            <a href="/informasi/detail/{{ $post->slug }}" class="read-more">Selengkapnya  <i class="icofont-simple-right ml-2"></i></a>
                        </div>
                    </div>
                </div>
				@empty
					
				@endforelse
        </div>
	</div>
</section>
@endsection