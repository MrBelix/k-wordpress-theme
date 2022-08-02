@include('sections.header')
  <main id="main" class="main">
    @yield('content')
  </main>
@include('partials.sticky-footer')
@include('components.calculate-modal')
@include('sections.footer')

