<div>

  <div class="container-fluid border bg-danger-rm d-none d-md-block" style="background-color: #002;">
    <div class="container py-2">
      <div class="float-left mr-5 mt-2" style="font-size: 1rem; font-weight: bold;">
        <div class="d-flex justify-content-center h-100">
          <div class="justify-content-center h-100 align-self-center text-center text-white">
            @if (false)
            <span class="bad badge-pill badge-success mr-3">
              Call
            </span>
            @endif
            <i class="fas fa-phone mr-2"></i>
            +977 9841223344
          </div>
        </div>
      </div>

      @if (true)
        <a href="" target="_blank">
          <div class="float-right mr-3 h-100" style="font-size: 1.5rem; font-weight: bold;">
            <div class="d-flex justify-content-center h-100">
              <div class="justify-content-center h-100 align-self-center text-center">
                <span class="" style="font-size: 1.8rem; font-weight:bold;">
                  <i class="fab fa-instagram mr-3 fa-2x-rm text-danger" style="font-size: 2.5rem;"></i>
                </span>
              </div>
            </div>
          </div>
        </a>
      @endif

      @if (true)
        <a href="" target="_blank">
          <div class="float-right mr-3 h-100" style="font-size: 1.5rem; font-weight: bold;">
            <div class="d-flex justify-content-center h-100">
              <div class="justify-content-center h-100 align-self-center text-center">
                <span class="" style="font-size: 1.8rem; font-weight:bold;">
                  <i class="fab fa-facebook text-primary fa-2x-rm" style="font-size: 2.5rem;"></i>
                </span>
              </div>
            </div>
          </div>
        </a>
      @endif
  
      @if (false)
      @if ($company->twitter_link)
        <a href="{{ $company->twitter_link }}" target="_blank">
          <div class="float-right mr-3 h-100" style="font-size: 1.5rem; font-weight: bold;">
            <div class="d-flex justify-content-center h-100">
              <div class="justify-content-center h-100 align-self-center text-center">
                <span class="" style="font-size: 1.8rem; font-weight:bold;">
                  <i class="fab fa-twitter mr-3 fa-2x text-info"></i>
                </span>
              </div>
            </div>
          </div>
        </a>
      @endif
  
      @if ($company->youtube_link)
        <a href="{{ $company->youtube_link }}" target="_blank">
          <div class="float-right mr-3 h-100" style="font-size: 1.5rem; font-weight: bold;">
            <div class="d-flex justify-content-center h-100">
              <div class="justify-content-center h-100 align-self-center text-center">
                <span class="" style="font-size: 1.8rem; font-weight:bold;">
                  <i class="fab fa-youtube mr-3 fa-2x text-danger"></i>
                </span>
              </div>
            </div>
          </div>
        </a>
      @endif
  
      @if ($company->tiktok_link)
        <a href="{{ $company->tiktok_link }}" target="_blank">
          <div class="float-right mr-3 h-100" style="font-size: 1.5rem; font-weight: bold;">
            <div class="d-flex justify-content-center h-100">
              <div class="justify-content-center h-100 align-self-center text-center">
                <span class="" style="font-size: 1.8rem; font-weight:bold;">
                  <i class="fab fa-tiktok mr-3 fa-2x text-danger"></i>
                </span>
              </div>
            </div>
          </div>
        </a>
      @endif
      @endif

      <div class="clearfix">
      </div>
    </div>
  </div>

  <div class="container">
    <div class="o-ws-header bg-success-rm text-white-rm p-3 mb-4-rm border-bottom" style="{{--background-color: maroon;--}}">
      <a href="{{ route('main') }}">
        <div class="float-left mr-4">
          @if (false)
          <img src="{{ asset('img/logo_1.jpg') }}" class="img-fluid" style="height: 80px;">
          @endif
          <i class="fas fa-dice-d6 fa-6x mr-3"></i>
        </div>
        <div class="float-left mt-3 d-none d-md-block">
          <h1 class="mt-2 text-dark" style="font-weight: bold; font-size: 2rem;">Clay Engg</h1>
          <div class="text-secondary">
            Just do it!
          </div>
        </div>
      </a>
  
  
  
     @if (false)
     <div class="float-right mr-5 h-100 mt-3" style="font-size: 1.5rem; font-weight: bold;">
       @livewire ('website-shopping-cart-badge')
     </div>
     @endif
  
  
      <div class="clearfix">
      </div>
    </div>
  </div>
</div>
