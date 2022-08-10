@php($is_video = $is_video??false)
<section class="page-hero-section">
  @if($is_video)
    <video class="page-hero-section__background" autoplay muted playsinline loop >
      <source src="{{$background}}">
    </video>
  @else
    <img class="page-hero-section__background" src="{{$background}}" alt="background">
  @endif
  <div class="page-hero-section__content">
    <h1 class="page-hero-section__title">{!! $title !!}</h1>
  </div>
  @include('partials.back-button')
</section>
