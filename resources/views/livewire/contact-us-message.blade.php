<div class="border p-3 bg-white-rm" style="background-color: #f5f5f5; opacity: 1; z-index: 100;">
  <span class="border badge badge-pill px-2 text-secondary mb-4" style="font-size: 1.3rem;">
  Contact us
  </span>

  <h2 class="h1 mt-3-rm mb-4" style="font-family: Arial; font-weight: bold;">
    Have any query? Please message!
  </h2>

  <div class="form-group">
    @if (false)
      <label for="exampleInputEmail1">Name</label>
    @endif
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
  </div>

  <div class="form-group">
    @if (false)
      <label for="exampleInputEmail1">Email</label>
    @endif
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
    @if (false)
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    @endif
  </div>

  <div class="form-group">
    @if (false)
      <label for="exampleInputEmail1">Phone</label>
    @endif
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone">
  </div>

  <div class="form-group">
    <textarea rows="4" class="form-control" id="exampleInputText" placeholder="Message"></textarea>
  </div>

  <button class="btn btn-primary btn-block" style="font-size: 1.3rem;" wire:click="woof">
    Send message
  </button>


</div>
