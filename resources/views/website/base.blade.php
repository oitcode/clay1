<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Page title -->
    @yield('pageTitleTag')

    <!-- Page title -->
    @yield('pageDescriptionMetaTag')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom-style.css') }}" rel="stylesheet">

    <!-- FB OG Meta tags -->
    @yield('fbOgMetaTags')

    <!-- Livewire -->
    @livewireStyles
</head>
<body>
  @if (false && ! $company)
    <div class="p-5 bg-danger text-white text-center">
      <h3 class="h5 font-weight-bold">
        Create Company in dashboard ...
      </h3>

      <br />
      <br />

      <h3 class="h5 font-weight-bold">
        &copy; OIT | www.oit.com.np
      </h3>
    </div>
  @else
  <div class="p-0">

    {{-- Header --}}
    @if (true)
    @include ('partials.headers-header')
    @include ('partials.header')
    @endif

    {{-- Top Menu --}}
    @if (false)
    <div class="container-fluid border mb-4-rm">
      <div class="container">
        @include ('partials.top-menu-act')
      </div>
    </div>
    @endif

    {{-- Top navigation menu --}}
    {{-- Product category menu --}}
    @if (false)
    @include ('partials.top-menu')
    @endif

    {{-- Content goes here !!! --}}
    @yield('content')

    {{-- Footer --}}
    <div class="container-fluid bg-primary-rm border-top pt-4 pb-5 text-white" style="background-color: #101530;">
      <div class="container">
        @include ('partials.footer')
      </div>
    </div>

  </div>
  @endif

{{-- Livewire --}}
@livewireScripts
</body>
</html>
