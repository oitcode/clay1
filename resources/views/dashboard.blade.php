@extends('layouts.app')
@section ('content')

  @if (env('SITE_TYPE') == 'erp')

    {{--
        Show quick links menu. This menu is visible only
        in small screen (mobile).
    --}}
    @if (false)
    @include ('partials.mobile-dashboard-main-links')
    @endif

    {{-- Show on bigger screens --}}
    <div class="d-none d-md-block">
    
      @if (false)
        {{-- Today: Show sales, purchase, expense  --}}
        <div class="row mb-4">
          @if (env('SITE_TYPE') == 'erp')
            <div class="col-md-2">
              @livewire ('flash-card-total-sales-today')
            </div>
    
            <div class="col-md-2">
              @livewire ('flash-card-total-purchase-today')
            </div>
    
            <div class="col-md-2">
              @livewire ('flash-card-total-expense-today')
            </div>
          @endif
        </div>
      @endif

      @if (false)
      @livewire ('support-component')
      @endif

      @if (false)
      @livewire ('transactions-navigator')
      @endif
    
    </div>

  @elseif (env('SITE_TYPE') == 'ecs')
    @if (false)
      @livewire ('cms.nav-menu-component')
      @livewire ('ecs.webpage-component')
    @endif
  @endif

  @if (false)
  @livewire ('contact-message-component')
  @endif

  <div>
    <h2 class="h4">
      <span class="text-primary">Web</span>
      <span class="text-muted">CMS</span>
    </h2>
  </div>

@endsection
