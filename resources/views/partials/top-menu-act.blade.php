<div class="bg-white py-2-rm text-right mb-3 border-bottom-rm">

  {{-- Top menu buttons. --}}

  @include ('partials.app-top-menu-button', [
    'btnRoute' => 'main',
    'iconFaClass' => 'fas fa-shopping-cart',
    'btnText' => 'Home',
  ])
  @include ('partials.app-top-menu-button', [
    'btnRoute' => 'aboutus',
    'iconFaClass' => 'fas fa-tools',
    'btnText' => 'About us',
  ])
  @include ('partials.app-top-menu-button', [
    'btnRoute' => 'portfolio',
    'iconFaClass' => 'fas fa-users',
    'btnText' => 'Portfolio',
  ])
  @include ('partials.app-top-menu-button', [
    'btnRoute' => 'contactus',
    'iconFaClass' => 'fas fa-chart-line',
    'btnText' => 'Contact Us',
  ])
  @if (false)
  @include ('partials.app-top-menu-button', [
    'btnRoute' => 'main',
    'iconFaClass' => 'fas fa-dolly',
    'btnText' => 'Inventory',
  ])

  @if (env('HAS_VAT') == true)
    @include ('partials.app-top-menu-button', [
      'btnRoute' => 'dashboard-vat',
      'iconFaClass' => 'fas fa-solar-panel',
      'btnText' => 'VAT',
    ])
  @endif

  {{-- User related. Is placed on top right part. --}}
  @include ('partials.app-top-menu-user-dropdown')

  {{-- Todo: This could be moved somewhere else --}}
  @if (env('SITE_TYPE') == 'ecs')
    @include ('partials.app-top-menu-ecs-dropdown')
  @endif

  {{-- Online order counter component --}}
  <div class="float-right mx-4 px-4 border-left-rm" style="font-size: 1.3rem;">
    @livewire ('online-order-counter')
  </div>
  @endif

  <div class="clearfix">
  </div>

</div>
