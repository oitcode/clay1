@extends('website.base')

@section('content')
<div class="continer-fluid">

  <div class="container">
    <h1>
      About us
    </h1>
  </div>

  <div class="container mb-4">

    <div class="row">
      <div class="col-md-8">
        <h2>
          Geotechnical Engineering
        </h2>
        <p style="font-size: 1.1rem;">
          Lorem ipsum dolor emis demur enum servus berof.
          Lorem ipsum dolor emis demur enum servus berof.
          Lorem ipsum dolor emis demur enum servus berof.
        </p>
        <p>
          Lorem ipsum dolor emis demur enum servus berof.
          Lorem ipsum dolor emis demur enum servus berof.
          Lorem ipsum dolor emis demur enum servus berof.
        </p>
      </div>
      <div class="col-md-4">
        <img src="{{ asset('img/about_us_1.png') }}" class="img-fluid">
      </div>
    </div>
  </div>

  <div class="container-fluid bg-light text-dark py-4 border">
    <div class="container">
      <h2 class="mb-4">
        <i class="fas fa-cog mr-3"></i>
        Our Team
      </h2>

      <div class="row">
        <div class="col-md-3">
        ABCD
        </div>
        <div class="col-md-3">
        ABCD
        </div>
        <div class="col-md-3">
        ABCD
        </div>
        <div class="col-md-3">
        ABCD
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid bg-danger text-white py-4">
    <div class="container">
      <h2>
        <i class="fas fa-cog mr-3"></i>
        Lorem ipsum dolor. Verus emur.
      </h2>
    </div>
  </div>

</div>
@endsection
