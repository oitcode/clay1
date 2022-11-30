<div class="bg-white py-2-rm text-right mb-3-rm border-bottom-rm">

  {{-- Top menu buttons. --}}

  @include ('partials.app-top-menu-button', [
    'btnRoute' => 'main',
    'iconFaClass' => 'fas fa-shopping-cart',
    'btnText' => 'HOME',
  ])
  @include ('partials.app-top-menu-button', [
    'btnRoute' => 'aboutus',
    'iconFaClass' => 'fas fa-tools',
    'btnText' => 'ABOUT US',
  ])
  @include ('partials.app-top-menu-button', [
    'btnRoute' => 'services',
    'iconFaClass' => 'fas fa-tools',
    'btnText' => 'SERVICES',
  ])
  @include ('partials.app-top-menu-button', [
    'btnRoute' => 'portfolio',
    'iconFaClass' => 'fas fa-users',
    'btnText' => 'PORTFOLIO',
  ])
  @include ('partials.app-top-menu-button', [
    'btnRoute' => 'contactus',
    'iconFaClass' => 'fas fa-chart-line',
    'btnText' => 'CONTACT US',
  ])

  <div class="clearfix">
  </div>

</div>
