@extends('layouts.app')
@section('content')
@include('components.bard')
  <section class="section contact-info pb-5">
      <div class="container">
           <div class="row">
              <div class="col-lg-4 col-sm-6 col-md-6">
                  <div class="contact-block mb-4 mb-lg-0">
                      <i class="icofont-live-support"></i>
                      <h5>No Telepon</h5>
                       +823-4565-13456
                  </div>
              </div>
              <div class="col-lg-4 col-sm-6 col-md-6">
                  <div class="contact-block mb-4 mb-lg-0">
                      <i class="icofont-support-faq"></i>
                      <h5>Email</h5>
                       desa@mail.com
                  </div>
              </div>
              <div class="col-lg-4 col-sm-6 col-md-6">
                  <div class="contact-block mb-4 mb-lg-0">
                      <i class="icofont-location-pin"></i>
                      <h5>Location</h5>
                       Jalan sama aku, nikah sama dia
                  </div>
              </div>
          </div>
      </div>
  </section>
@endsection