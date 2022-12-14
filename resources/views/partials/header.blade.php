<div>

  {{-- Very top bar --}}
  <div class="container-fluid border bg-danger-rm d-none d-md-block" style="background-color: #d9f1ff;">
    <div class="py-3 pl-4">

      {{-- Address --}}
      <div class="float-left mr-4">
        <i class="fas fa-map-marker-alt text-primary mr-2"></i>
        <span class="text-secondary" style="font-family: Arial;">
          Balkhu, Kathmandu, Nepal
        </span>
      </div>

      {{-- Clock --}}
      <div class="float-left">
        <i class="fas fa-clock text-primary mr-2"></i>
        <span class="text-secondary" style="font-family: Arial;">
          Mon - Fri: 09 AM - 05 PM
        </span>
      </div>


      {{-- Linkedin --}}
      <div class="float-right mr-3">
        <i class="fab fa-linkedin text-primary mr-2 fa-2x"></i>
      </div>

      @if (false)
      {{-- Twitter Link --}}
      <div class="float-right mr-3">
        <i class="fab fa-twitter text-primary mr-2 fa-2x"></i>
      </div>
      @endif

      {{-- FB Link --}}
      <div class="float-right mr-3">
        <i class="fab fa-facebook text-primary mr-2 fa-2x"></i>
      </div>

      {{-- Phone --}}
      <div class="float-right mr-4">
        <i class="fas fa-phone text-primary mr-2"></i>
        <span class="text-secondary" style="font-family: Arial;">
          +977 9841871994
        </span>
      </div>


      <div class="clearfix">
      </div>
    </div>
  </div>

  {{-- Logo and menu --}}

  {{-- BIGGER SCREEN --}}
  <div class="d-none d-md-block">
    <div class="container-fluid">
      <div class="d-flex justify-content-between">

        <div class="py-3 pl-4">
          <a href="{{ route('main') }}" class="text-decoration-none">
            <h1 style="color: #004; font-family: Arial; font-weight: bold;">
              <i class="fas fa-check-circle mr-3"></i>
              Clay Engineering
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
  <div class="d-md-none">
    <div class="container-fluid">
      @include ('partials.site-top-menu-mob')
    </div>
  </div>

</div>
