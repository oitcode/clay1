@extends('website.base')
@section('content')
<div class="continer-fluid o-top-page-banner">
  <div class="o-overlay text-white">
    <div class="container py-5">
    <h1 style="font-family: Arial;">
      Construction supervision
    </h1>
    Home/Services/Construction supervision
    </div>
  </div>
</div>

{{-- First para --}}
<div class="container-fluid py-4 mb-5">
  <div class="container">
    <div class="row">
      {{-- Image --}}
      <div class="col-md-6">
        <img src="{{ asset('img/bg-image-3.jpg') }}" class="img-fluid">
      </div>

      {{-- Text --}}
      <div class="col-md-6">
        <span class="border badge badge-pill text-secondary" style="font-size: 1.3rem;">
        Services
        </span>

        <h2 class="h1 mt-3 mb-4" style="color: #004; font-family: Arial; font-weight: bold;">
          Construction supervision
        </h2>

        <p class="text-secondary h5 mb-3">
          We provide supervision of construction works so
          that the project meets the enigneering and quality standards.
        </p>

        <p class="text-secondary h5 mb-4">
          We provide supervision of construction works so
          that the project meets the enigneering and quality standards.
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

{{-- Our works header --}}
<div class="container-fluid bg-primary text-white py-4 mb-5">
  <div class="container">
    <h2>
      <i class="fas fa-users mr-3"></i>
      Our works
    </h2>
  </div>
</div>

{{-- Our works cards --}}
<div class="container-fluid pb-4 bg-white">
  <div class="container">
    <div class="row">

      {{-- Work 1 --}}
      <div class="col-md-4 mb-3">
        <div class="card shadow">
          <div class="card-body p-0" style="background-color: #f5f5f5;">
            <img src="{{ asset('img/about-mission.jpg') }}" class="img-fluid w-100">
            <h3 class="h4 mt-4 text-center" style="color: #004;">Alpha</h3>
            <div class="p-2 h5 text-secondary">
              Aenean volutpat, dolor eu finibus rhoncus, elit felis vehicula nunc,
              ut pulvinar ex diam nec lacus. Phasellus sit amet rhoncus turpis.
              Aenean tincidunt auctor purus, ac sodales sapien sagittis 
            </div>
          </div>
        </div>
      </div>

      {{-- Work 2 --}}
      <div class="col-md-4 mb-3">
        <div class="card shadow">
          <div class="card-body p-0" style="background-color: #f5f5f5;">
            <img src="{{ asset('img/about-vision.jpg') }}" class="img-fluid w-100">
            <h3 class="h4 mt-4 text-center" style="color: #004;">Delta</h3>
            <div class="p-2 h5 text-secondary">
              Aenean volutpat, dolor eu finibus rhoncus, elit felis vehicula nunc,
              ut pulvinar ex diam nec lacus. Phasellus sit amet rhoncus turpis.
              Aenean tincidunt auctor purus, ac sodales sapien sagittis 
            </div>
          </div>
        </div>
      </div>

      {{-- Work 3 --}}
      <div class="col-md-4 mb-3">
        <div class="card shadow">
          <div class="card-body p-0" style="background-color: #f5f5f5;">
            <img src="{{ asset('img/about-objective.jpg') }}" class="img-fluid w-100">
            <h3 class="h4 mt-4 text-center" style="color: #004;">Sigma</h3>
            <div class="p-2 h5 text-secondary">
              Aenean volutpat, dolor eu finibus rhoncus, elit felis vehicula nunc,
              ut pulvinar ex diam nec lacus. Phasellus sit amet rhoncus turpis.
              Aenean tincidunt auctor purus, ac sodales sapien sagittis 
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
