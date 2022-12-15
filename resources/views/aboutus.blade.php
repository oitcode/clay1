@extends('website.base')
@section('content')
<div class="continer-fluid o-top-page-banner">
  <div class="o-overlay text-white">
    <div class="container py-5">
    <h1 style="font-family: Arial;">
      About us
    </h1>
    Home/AboutUs
    </div>
  </div>
</div>

{{-- First para --}}
<div class="container-fluid py-4 mb-5">
  <div class="container">
    <div class="row">
      {{-- Image --}}
      <div class="col-md-6">
        <img src="{{ asset('img/bg-image-2.jpg') }}" class="img-fluid">
      </div>

      {{-- Text --}}
      <div class="col-md-6">
        <span class="border badge badge-pill text-secondary" style="font-size: 1.3rem;">
        About us
        </span>

        <h2 class="h1 mt-3 mb-4" style="color: #004; font-family: Arial; font-weight: bold;">
          Why should you trust us? Get to know about us!
        </h2>

        <p class="text-secondary h5 mb-3">
          Clay engineering consultancy is one of the best civil and
          geotechnical engineering consultancy in Nepal providing high
          quality engineering work throughout the nation.
        </p>

        <p class="text-secondary h5 mb-4">
          Our team of highly skilled engineers and technicians have the
          invaluable experience that will deliver the high quality work
          that is needed for your project.
        </p>

        <div class="mb-2">
          <i class="fas fa-check-circle mr-3 text-primary"></i>
          <span class="text-secondary h5">
            Quality engineering work
          </span>
        </div>

        <div class="mb-2">
          <i class="fas fa-check-circle mr-3 text-primary"></i>
          <span class="text-secondary h5">
            Only qualified engineers
          </span>
        </div>

        <div class="mb-2">
          <i class="fas fa-check-circle mr-3 text-primary"></i>
          <span class="text-secondary h5">
            Invaluable experience
          </span>
        </div>

      </div>
    </div>
  </div>
</div>

{{-- Directors message --}}
@include ('partials.directors-message')

{{-- Mission vision objective --}}
@include ('partials.our-mission')


{{-- Why Choose use --}}
@include ('partials.why-choose-us')

@endsection
