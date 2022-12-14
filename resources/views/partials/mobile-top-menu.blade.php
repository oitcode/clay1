<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{ route('dashboard') }}">
    <i class="far fa-check-circle fa-2x-rm mr-3 text-info" style="font-size: 1.3rem;"></i>
    OPay
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      @can ('is-admin')
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-tv mr-3"></i>
            Dashboard 
          </a>
        </li>
      @endcan

      @can ('is-admin')
      @endcan

      @guest
      @else
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="mobTopMenuDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-cog text-secondry mr-2"></i>
            {{ Auth::user()->name }}
          </a>
          <div class="dropdown-menu" aria-labelledby="mobTopMenuDropdown2">
            @can ('is-admin')
            <a class="dropdown-item" href="{{ route('company') }}">
              <i class="fas fa-home text-secondary mr-2"></i>
              Company
            </a>
            @endcan
            <a class="dropdown-item" href="">
              <i class="fas fa-history text-secondary mr-2"></i>
              v0.0.1
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();"
            >
              <i class="fas fa-power-off mr-2 text-warning-rm"></i>
              Logout
            </a>
          </div>
        </li>
      @endguest

    </ul>
  </div>
</nav>
