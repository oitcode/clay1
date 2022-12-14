<div class="border p-3 bg-white-rm" style="background-color: #f5f5f5; opacity: 1; z-index: 100;">
  @if (false)
  <span class="border badge badge-pill px-2 text-secondary mb-4" style="font-size: 1.3rem;">
  Contact us
  </span>
  @endif

  <h2 class="h2 mt-3-rm mb-4" style="font-family: Arial; font-weight: bold;">
    Have any query?
    <span class="h4 text-secondary">
      Please message!
    </span>
  </h2>

  <div class="form-group">
    <input type="text" class="form-control" wire:model.defer="name" placeholder="Name">
    @error ('name') <small><span class="text-danger">{{ $message }}</span></small> @enderror
  </div>

  <div class="form-group">
    <input type="email" class="form-control" wire:model.defer="email" placeholder="Email">
    @error ('email') <small><span class="text-danger">{{ $message }}</span></small> @enderror
    @if (false)
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    @endif
  </div>

  <div class="form-group">
    <input type="text" class="form-control" wire:model.defer="phone" placeholder="Phone">
    @error ('phone') <small><span class="text-danger">{{ $message }}</span></small> @enderror
  </div>

  <div class="form-group">
    <textarea rows="4" class="form-control" wire:model.defer="message" placeholder="Message"></textarea>
    @error ('message') <small><span class="text-danger">{{ $message }}</span></small> @enderror
  </div>

  <button class="btn btn-primary btn-block" style="font-size: 1.3rem;" wire:click="create">
    Send message
  </button>


</div>
