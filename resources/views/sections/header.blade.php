<header class="banner">
    <div id="open-mobile-menu" class="banner__hamburger">
      <div></div>
      <div></div>
      <div></div>
    </div>
  <div class="mobile lss">
    @include('partials.languages')
  </div>
    <div class="banner__wrapper">
      @include('partials.social-links')
      <div class="banner__navigation">
        <ul class="menu mobile">
          <li id="menu-item-133" class="menu-item">
            <a href="/">{{pll__('Головна')}}</a>
          </li>
        </ul>
      @if(has_nav_menu($navigation['left']['theme_location']))
        {!! wp_nav_menu($navigation['left']) !!}
      @endif
      <a href="/" class="logo">
        @include('partials.logo')
      </a>
      @if(has_nav_menu($navigation['right']['theme_location']))
        {!! wp_nav_menu($navigation['right']) !!}
      @endif
      </div>
      <div class="banner__toolbar">
        @include('partials.languages')
        @include('partials.close-modal')
      </div>
    </div>
</header>
