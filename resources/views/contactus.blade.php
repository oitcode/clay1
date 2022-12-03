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
        <div class="d-flex border p-5 h-100" style="background-color: #d9f1ff;">
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
        <div class="d-flex border px-3 py-5 h-100" style="background-color: #d9f1ff;">
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
        <div class="d-flex border px-3 py-5 h-100" style="background-color: #d9f1ff;">
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
      <div class="border p-3 bg-white-rm" style="background-color: #d9f1ff; opacity: 1; z-index: 100;">
        <span class="border badge badge-pill px-2 text-secondary mb-4" style="font-size: 1.3rem;">
        Contact us
        </span>

        <h2 class="h1 mt-3-rm mb-4" style="font-family: Arial; font-weight: bold;">
          Have any query? Please contact us!
        </h2>
    
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
        </div>
    
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
    
        <div class="form-group">
          <label for="exampleInputEmail1">Phone</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone">
        </div>

        <button class="btn btn-primary btn-block" style="font-size: 1.3rem;">
          Send message
        </button>
    
    
      </div>
    </div>

    <div class="col-md-6">
      <img src="{{ asset('img/bg-image-3.jpg') }}" class="img-fluid">
    </div>
  </div>
</div>


@endsection
