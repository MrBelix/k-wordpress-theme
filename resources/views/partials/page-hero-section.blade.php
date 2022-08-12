@php($is_video = $is_video??false)
<section class="page-hero-section">
  @if($is_video)
    @if(!empty($background))
    <video class="page-hero-section__background desktop" autoplay muted playsinline loop >
      <source src="{{$background}}">
    </video>
    @endif
  @if(!empty($background_mobile))
    <video class="page-hero-section__background mobile" autoplay muted playsinline loop >
      <source src="{{$background_mobile}}">
    </video>
    @endif
  @else
    <img class="page-hero-section__background" src="{{$background}}" alt="background">
  @endif
  <div class="page-hero-section__content">
    <h1 class="page-hero-section__title">{!! $title !!}</h1>
  </div>
  @include('partials.back-button')
</section>
