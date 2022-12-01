@extends('website.base')

@section('content')
<div class="continer-fluid o-top-page-banner mb-5">
  <div class="o-overlay text-white">
    <div class="container py-5">
    <h1 style="font-family: Arial;">
      Services
    </h1>
    Home/Services
    </div>
  </div>
</div>

{{-- Services para --}}
<div class="container-fluid mb-5">

  <div class="container text-center">
    <span class="border badge badge-pill text-secondary" style="font-size: 1.3rem;">
    Services
    </span>
    <h2 class="h1 mt-3 mb-4" style="color: #004; font-family: Arial; font-weight: bold;">
      Civil Engineering Solutions
    </h2>
  </div>

  <div class="container">
    <div class="row mb-4">

      {{-- Card 1 --}}
      <div class="col-md-4">
        <div class="card">
          <div class="card-body" style="background-color: #d9f1ff;">
            <i class="fas fa-heart fa-2x text-primary"></i>
            <h2 class="h3 mt-3 mb-4" style="color: #004; font-family: Arial; font-weight: bold;">
              Geotechnical investigation
            </h2>
            <p class="text-secondary h5 mb-3">
              Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.
            </p>
            <button class="btn btn-primary badge-pill mt-3 p-3 px-5">
              <span class="h5">
              Read more
              </span>
            </button>
          </div>
        </div>
      </div>

      {{-- Card 2 --}}
      <div class="col-md-4">
        <div class="card">
          <div class="card-body" style="background-color: #d9f1ff;">
            <i class="fas fa-heart fa-2x text-primary"></i>
            <h2 class="h3 mt-3 mb-4" style="color: #004; font-family: Arial; font-weight: bold;">
              Design Works
            </h2>
            <p class="text-secondary h5 mb-3">
              Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.
            </p>
            <button class="btn btn-primary badge-pill mt-3 p-3 px-5">
              <span class="h5">
              Read more
              </span>
            </button>
          </div>
        </div>
      </div>

      {{-- Card 3 --}}
      <div class="col-md-4">
        <div class="card">
          <div class="card-body" style="background-color: #d9f1ff;">
            <i class="fas fa-heart fa-2x text-primary"></i>
            <h2 class="h3 mt-3 mb-4" style="color: #004; font-family: Arial; font-weight: bold;">
              Protection works design
            </h2>
            <p class="text-secondary h5 mb-3">
              Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.
            </p>
            <button class="btn btn-primary badge-pill mt-3 p-3 px-5">
              <span class="h5">
              Read more
              </span>
            </button>
          </div>
        </div>
      </div>
    </div>

    <div class="row mb-4">

      {{-- Card 4 --}}
      <div class="col-md-4">
        <div class="card">
          <div class="card-body" style="background-color: #d9f1ff;">
            <i class="fas fa-heart fa-2x text-primary"></i>
            <h2 class="h3 mt-3 mb-4" style="color: #004; font-family: Arial; font-weight: bold;">
              Slope stability analysis 
            </h2>
            <p class="text-secondary h5 mb-3">
              Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.
            </p>
            <button class="btn btn-primary badge-pill mt-3 p-3 px-5">
              <span class="h5">
              Read more
              </span>
            </button>
          </div>
        </div>
      </div>

      {{-- Card 5 --}}
      <div class="col-md-4">
        <div class="card">
          <div class="card-body" style="background-color: #d9f1ff;">
            <i class="fas fa-heart fa-2x text-primary"></i>
            <h2 class="h3 mt-3 mb-4" style="color: #004; font-family: Arial; font-weight: bold;">
              Topographical survey
            </h2>
            <p class="text-secondary h5 mb-3">
              Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.
            </p>
            <button class="btn btn-primary badge-pill mt-3 p-3 px-5">
              <span class="h5">
              Read more
              </span>
            </button>
          </div>
        </div>
      </div>

      {{-- Card 6 --}}
      <div class="col-md-4">
        <div class="card">
          <div class="card-body" style="background-color: #d9f1ff;">
            <i class="fas fa-heart fa-2x text-primary"></i>
            <h2 class="h3 mt-3 mb-4" style="color: #004; font-family: Arial; font-weight: bold;">
              Construction works
            </h2>
            <p class="text-secondary h5 mb-3">
              Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.
            </p>
            <button class="btn btn-primary badge-pill mt-3 p-3 px-5">
              <span class="h5">
              Read more
              </span>
            </button>
          </div>
        </div>
      </div>
       
    </div>
  </div>
</div>

{{-- Client testimonials --}}
<div class="container-fluid bg-primary text-white py-4">
  <div class="container">
    <h2>
      <i class="fas fa-quote-left mr-3"></i>
      What our clients say
    </h2>
  </div>
</div>

<div class="continer-fluid">
  <div class="container d-flex">
  </div>
</div>


<div class="container">
            <div id="demo" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="carousel-caption">
                      <p>If Shai Reznik's TDD videos don't convince you to add automated testing your code,
                          I don't know what will.This was the very best explanation of frameworks for brginners 
                          that I've ever seen.
                      </p>
                      <img src="{{ asset('img/testimonial-user-1.png') }}" class="img-fluid">
                      <div id="image-caption">Nick Doe</div>
                    </div>   
                  </div>
                  <div class="carousel-item">
                    <div class="carousel-caption">
                      <p>If Shai Reznik's TDD videos don't convince you to add automated testing your code,
                        I don't know what will.This was the very best explanation of frameworks for brginners 
                        that I've ever seen.</p>
                        <img src="{{ asset('img/testimonial-user-1.png') }}" class="img-fluid">
                        <div id="image-caption">Cromption Greves</div>
                    </div>   
                  </div>
                  <div class="carousel-item">
                    <div class="carousel-caption">
                      <p>If Shai Reznik's TDD videos don't convince you to add automated testing your code,
                        I don't know what will.This was the very best explanation of frameworks for brginners 
                        that I've ever seen.</p>
                        <img src="{{ asset('img/testimonial-user-1.png') }}" class="img-fluid">
                        <div id="image-caption">Harry Mon</div>
                    </div>   
                  </div>
                </div>
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                  <i class='fas fa-arrow-left o-carousel-btn'></i>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                  <i class='fas fa-arrow-right o-carousel-btn'></i>
                </a>
              </div>
              
</div>
@endsection
