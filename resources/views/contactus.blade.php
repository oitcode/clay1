@extends('website.base')

@section('content')
<div class="continer-fluid o-top-page-banner mb-5">
  <div class="o-overlay text-white">
    <div class="container py-5">
    <h1 style="font-family: Arial;">
      Contact us
    </h1>
    Home/ContactUs
    </div>
  </div>
</div>

{{-- Services para --}}
<div class="container-fluid mb-5">

  <div class="container">
    <div class="row mb-4">

      {{-- Card 1 --}}
      <div class="col-md-4">
        <div class="d-flex border p-5 h-100" style="background-color: #f5f5f5;">
          <div class="d-flex flex-column justify-content-center">
            <i class="fas fa-map-marker-alt fa-2x mr-3 text-primary"></i>
          </div>
          <div class="d-flex flex-column justify-content-center">
            <div class="h5 mb-2 text-secondary">
              Address
            </div>
            <div class="h5" style="font-weight: bold;">
              Balkhu, Kathmandu, Nepal
            </div>
          </div>
        </div>
      </div>

      {{-- Card 2 --}}
      <div class="col-md-4">
        <div class="d-flex border px-3 py-5 h-100" style="background-color: #f5f5f5;">
          <div class="d-flex flex-column justify-content-center">
            <i class="fas fa-phone fa-2x mr-3 text-primary"></i>
          </div>
          <div class="d-flex flex-column justify-content-center">
            <div class="h5 mb-2 text-secondary">
              Phone
            </div>
            <div class="h5" style="font-weight: bold;">
              +977 9841871994
            </div>
          </div>
        </div>
      </div>

      {{-- Card 3 --}}
      <div class="col-md-4">
        <div class="d-flex border px-3 py-5 h-100" style="background-color: #f5f5f5;">
          <div class="d-flex flex-column justify-content-center">
            <i class="fas fa-envelope fa-2x mr-3 text-primary"></i>
          </div>
          <div class="d-flex flex-column justify-content-center">
            <div class="h5 mb-2 text-secondary">
              Email
            </div>
            <div class="h5" style="font-weight: bold;">
              clayengg12@gmail.com
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</div>

<div class="container mb-5">
  <div class="row">
    <div class="col-md-6">
      @livewire ('contact-us-message')
    </div>
    <div class="col-md-6">
      <img src="{{ asset('img/bg-image-3.jpg') }}" class="img-fluid">
    </div>
  </div>
</div>

@endsection
