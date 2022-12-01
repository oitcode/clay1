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
          Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
          Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
          sed stet lorem sit clita duo justo magna dolore erat amet
        </p>

        <p class="text-secondary h5 mb-4">
          Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
          Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
          sed stet lorem sit clita duo justo magna dolore erat amet
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

        <button class="btn btn-primary badge-pill mt-3 p-3 px-5">
          <span class="h5">
          Read more
          </span>
        </button>

      </div>
    </div>
  </div>
</div>

{{-- Why Choose use --}}
<div class="container-fluid bg-primary">
  <div class="container">
    <div class="row">
      <div class="col-md-6 py-5 text-white">
        <span class="border badge badge-pill" style="font-size: 1.3rem;">
        Features
        </span>

        <h2 class="h1 mt-3 mb-4" style="font-family: Arial; font-weight: bold;">
          Why choose us
        </h2>

        <p class="h5 mb-5">
          Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
          Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
          sed stet lorem sit clita duo justo magna dolore erat amet
        </p>

        <div class="row mb-4">
          <div class="col-md-6">
            <div class="d-flex">
              <div class="d-flex flex-column justify-content-center">
                <i class="fas fa-check-circle fa-2x mr-3"></i>
              </div>
              <div>
                <div class="h5 mb-2">
                  Experienced
                </div>
                <div class="h4" style="font-weight: bold;">
                  Engineers
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="d-flex">
              <div class="d-flex flex-column justify-content-center">
                <i class="fas fa-check-circle fa-2x mr-3"></i>
              </div>
              <div>
                <div class="h5 mb-2">
                  Quality
                </div>
                <div class="h4" style="font-weight: bold;">
                  Service
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-md-6">
            <div class="d-flex">
              <div class="d-flex flex-column justify-content-center">
                <i class="fas fa-check-circle fa-2x mr-3"></i>
              </div>
              <div>
                <div class="h5 mb-2">
                  Valuable
                </div>
                <div class="h4" style="font-weight: bold;">
                  Consultation
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="d-flex">
              <div class="d-flex flex-column justify-content-center">
                <i class="fas fa-check-circle fa-2x mr-3"></i>
              </div>
              <div>
                <div class="h5 mb-2">
                  Professional
                </div>
                <div class="h4" style="font-weight: bold;">
                  Support
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <img src="{{ asset('img/bg-image-2.jpg') }}" class="img-fluid">
      </div>
    </div>
  </div>
</div>
@endsection
