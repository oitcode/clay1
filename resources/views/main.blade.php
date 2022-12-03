@extends('website.base')

@section('content')
@if (false)
<div class="container-fluid mb-5" style="background-image: url('../img/bg-image-3.jpg');">
    
  <div class="container mb-0">
    <div class="d-flex flex-column justify-content-center" style="height: 500px;">
      <h2>
        Civil Engineering
      </h2>

      <button class="btn btn-primary" href="" style="width: 100px;">
        Contact us
      </button>
    </div>
  </div>
</div>
@endif

<div class="continer-fluid bg-primary">
  <div class="row">
    <div class="col-md-6">
      <div class="d-flex flex-column justify-content-center h-100 pl-5">
        <h2 class="h1 text-white mb-5" style="font-size: 2.5rem; color: #004; font-family: Arial; font-weight: bold;">
          Civil and Geotechnical Engineering
        </h2>

        <div class="row text-white">
          <div class="col-md-4 border-left">
            <div>
              <h2 style="font-weight: bold;">
                Best
              </h2>
            </div>
            <div>
              <h4>
                Engineering
              </h4>
            </div>
          </div>
          <div class="col-md-4 border-left">
            <div>
              <h2 style="font-weight: bold;">
                Valuable
              </h2>
            </div>
            <div>
              <h4>
                Experience
              </h4>
            </div>
          </div>
          <div class="col-md-4 border-left">
            <div>
              <h2 style="font-weight: bold;">
                Professional
              </h2>
            </div>
            <div>
              <h4>
                Support
              </h4>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <img src="{{ asset('img/bg-image-3.jpg') }}" class="img-fluid">
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

{{-- Second para --}}
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
              Construction supervision
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

@if (true)
<div class="container-fluid text-dark py-5 border" style="background-color: aliceBlue">
  <div class="container">

    <div class="text-center">
      <span class="border badge badge-pill text-secondary" style="font-size: 1.3rem;">
      Numbers
      </span>

      <h2 class="h1 mt-3 mb-4" style="color: #004; font-family: Arial; font-weight: bold;">
        What we have accomplised
      </h2>
    </div>

    <div class="row">
      <div class="col-md-3">
        <div class="card">
          <div class="card-body text-center">
            <h3 class="h1" style="font-weight: bold;">
              60
            </h3>
            <p style="font-size: 1.3rem;">
              Clients
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <div class="card-body text-center">
            <h3 class="h1" style="font-weight: bold;">
              43
            </h3>
            <p style="font-size: 1.3rem;">
              Projects
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <div class="card-body text-center">
            <h3 class="h1" style="font-weight: bold;">
              5
            </h3>
            <p style="font-size: 1.3rem;">
              Branches
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <div class="card-body text-center">
            <h3 class="h1" style="font-weight: bold;">
              8
            </h3>
            <p style="font-size: 1.3rem;">
              Years Experience
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endif

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
