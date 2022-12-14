<div class="text-center border">
  <a href="{{ route($btnRoute) }}"
      class="btn
        {{ env('OC_ASCENT_BTN_COLOR', 'btn-primary') }}
        w-100 h-100 py-3 font-weight-bold text-left"
      style="font-size: calc(0.6rem + 0.15vw);
        @if(Route::current()->getName() == $btnRoute)
          background-color: {{ env('OC_SELECT_COLOR', '#000050') }};
        @endif
      "
      >

    <div class="d-flex flex-column">
      <div class="d-flex justify-content-center">
        <i class="{{ $iconFaClass }} {{ env('OC_ASCENT_HL_COLOR', 'text-primary') }}"></i>
      </div>
      <div class="d-flex justify-content-center {{ env('OC_ASCENT_HL_TXT_COLOR', 'text-primary') }}">
        {{ $btnText }}
      </div>
    </div>

  </a>
</div>
