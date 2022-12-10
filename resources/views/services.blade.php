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

@include ('partials.services')


@if (false)
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
@endif
@endsection
