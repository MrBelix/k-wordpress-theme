<section class="hero-block">
  @if($background)
    <video class="hero-block__background" autoplay muted playsinline loop >
      <source src="{{$background['url']}}">
    </video>
  @endif
    <div class="hero-block__content">
      <div class="mobile">
        @include('partials.hero-block-logo')
        <hr class="mobile">
      </div>
      <h2>{{$title}}</h2>
    </div>
    <div class="hero-block__footer">
      <div class="wp-block-button">
        <a href="{{$phoneUrl}}" class="wp-block-button__link">{{$phone}}</a>
      </div>
      <div class="wp-block-button is-style-outline">
        <a href="#calculate-project-modal" class="wp-block-button__link">{{pll__('Розрахувати проект')}}</a>
      </div>
    </div>
</section>
