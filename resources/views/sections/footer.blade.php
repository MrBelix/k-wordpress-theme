<footer class="main-footer">
  <div class="container">
    <hr>
    <div class="main-footer__content">
      <div class="main-footer__content-social">
        @include('partials.social-links')
      </div>
      <div class="main-footer__content-1">
        @php(dynamic_sidebar('footer-col-1'))
      </div>
      <div class="main-footer__content-2">
        @php(dynamic_sidebar('footer-col-2'))
      </div>
      <div class="main-footer__content-3">
        @php(dynamic_sidebar('footer-col-3'))
      </div>
      <div class="main-footer__content-4">
        @php(dynamic_sidebar('footer-col-4'))
      </div>
    </div>
  </div>
</footer>
