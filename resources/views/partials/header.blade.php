<div class="sticky-top">

  {{-- Logo and menu --}}

  {{-- BIGGER SCREEN --}}
  <div class="d-none d-md-block">
    <div class="container-fluid bg-white">
      <div class="d-flex justify-content-between">

        <div class="py-3 pl-4">
          <a href="{{ route('main') }}" class="text-decoration-none">
            <h1 style="color: #004; font-family: Arial; font-weight: bold;">
              <i class="fas fa-check-circle mr-3"></i>
              {{ env('CMP_NAME', 'Ferissan') }}
            </h1>
          </a>
        </div>

        <div class="py-3">
          @include ('partials.top-menu-act')
        </div>

      </div>
    </div>
  </div>

  {{-- SMALLER SCREEN --}}
  <div class="d-md-none bg-white">
    <div class="container-fluid">
      @include ('partials.site-top-menu-mob')
    </div>
  </div>

</div>
