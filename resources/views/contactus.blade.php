@extends('website.base')

@section('content')


<div class="container-fluid bg-light o-overlaid p-0 pt-4">
  <div class="o-overlay">
    <div class="continer-fluid mb-5">
    
      <div class="container text-center text-white">
        <h1>
          Contact Us
        </h1>
        <h2 class="h4">
          Contact us for all kind of civil engineering and clay engineering works.
        </h2>
      </div>
    </div>
    
    <div class="container-fluid pb-4">
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-white">
    
            {{-- Address --}}
            <div class="d-flex mb-4">
              <div class="mr-3">
                <i class="fas fa-map-marker-alt fa-2x"></i>
              </div>
              <div>
                <h2 class="h3 text-primary">
                  Address
                </h2>
                <p class="h5">
                Balkhu, Kathmandu, Nepal
                </p>
              </div>
            </div>
    
            {{-- Phone --}}
            <div class="d-flex mb-4">
              <div class="mr-3">
                <i class="fas fa-phone fa-2x"></i>
              </div>
              <div>
                <h2 class="h3 text-primary">
                  Phone
                </h2>
                <p class="h5">
                +977 4434543
                </p>
              </div>
            </div>
    
            {{-- Email --}}
            <div class="d-flex mb-4">
              <div class="mr-3">
                <i class="fas fa-envelope fa-2x"></i>
              </div>
              <div>
                <h2 class="h3 text-primary">
                  Email
                </h2>
                <p class="h5">
                clay@gmail.com
                </p>
              </div>
            </div>
    
          </div>
    
          {{-- Contact us form --}}
          <div class="col-md-6">
            <div class="border p-3 bg-white-rm" style="background-color: white; opacity: 1; z-index: 100;">
              <h2>
                Send message
              </h2>
    
              <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              </div>
    
              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
    
              <div class="form-group">
                <label for="exampleInputEmail1">Phone</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              </div>
    
    
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




@endsection
