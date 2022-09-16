@extends('website.base')

@section('content')
<div class="continer-fluid">
  <div class="container d-flex">
    @include ('partials.top-menu-act')
  </div>

  <div class="container">
    <h1>
      Services
    </h1>
  </div>

  <div class="container-fluid py-4">
    <div class="container">
      <h2>
        Geotechnical investigation
      </h2>

      <h3>
        Drilling
      </h3>
      <div class="row">
        <div class="col-md-8" style="font-size: 1.1rem;">
          Lorem ipsum dolor emur servues.
          Lorem ipsum dolor emur servues.
          Lorem ipsum dolor emur servues.
        </div>

        <div class="col-md-4">
          <img src="{{ asset('img/about_us_1.png') }}" class="img-fluid">
        </div>
      </div>

      <hr />

      <h3>
        Laboratory testing
      </h3>
      <div class="row">
        <div class="col-md-8" style="font-size: 1.1rem;">
          Lorem ipsum dolor emur servues.
          Lorem ipsum dolor emur servues.
          Lorem ipsum dolor emur servues.
        </div>

        <div class="col-md-4">
          <img src="{{ asset('img/about_us_1.png') }}" class="img-fluid">
        </div>
      </div>

      <hr />

      <h3>
        Soil sample testing
      </h3>
      <div class="row">
        <div class="col-md-8" style="font-size: 1.1rem;">
          Lorem ipsum dolor emur servues.
          Lorem ipsum dolor emur servues.
          Lorem ipsum dolor emur servues.
        </div>

        <div class="col-md-4">
          <img src="{{ asset('img/about_us_1.png') }}" class="img-fluid">
        </div>
      </div>

      <hr />

      <h3>
        Construction material testing
      </h3>
      <div class="row">
        <div class="col-md-8" style="font-size: 1.1rem;">
          Lorem ipsum dolor emur servues.
          Lorem ipsum dolor emur servues.
          Lorem ipsum dolor emur servues.
        </div>

        <div class="col-md-4">
          <img src="{{ asset('img/about_us_1.png') }}" class="img-fluid">
        </div>
      </div>

    </div>
  </div>

</div>
@endsection
