<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{ route('main') }}" style="color: #004;">
  <i class="fas fa-check-circle"></i>
  Clay Engineering Consultancy
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('main') }}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('aboutus') }}">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('services') }}">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('portfolio') }}">Portfolio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('contactus') }}">Contact us</a>
      </li>
    </ul>
  </div>
</nav>
