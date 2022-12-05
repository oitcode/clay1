@extends('website.base')

@section('content')
<div class="continer-fluid o-top-page-banner mb-5">
  <div class="o-overlay text-white">
    <div class="container py-5">
    <h1 style="font-family: Arial;">
      Portfolio
    </h1>
    Home/Portfolio
    </div>
  </div>
</div>

{{-- Portfolio government --}}
@include ('partials.portfolio-government')

@endsection
