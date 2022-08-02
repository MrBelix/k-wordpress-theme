@include('sections.header')
  <main id="main" class="main">
    @yield('content')
  </main>


@include('partials.sticky-footer')
@include('components.modal', ['content' => 'components.calculate-modal', 'trigger' => 'calculate-modal'])
@include('components.modal', ['content' => 'components.partners-modal', 'trigger' => 'partners-modal'])


@include('sections.footer')

