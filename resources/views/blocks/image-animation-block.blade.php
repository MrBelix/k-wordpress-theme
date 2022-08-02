<section class="image-animation-block">
  <div class="container">
    @if($title)
      <h2 class="color-primary text-center">{!! $title !!}</h2>
    @endif
    @if($subTitle)
      <h3 class="text-center">{{$subTitle}}</h3>
    @endif
  </div>
  <div class="image-animation-block__container {{$is_reverse? 'reverse' : ''}}">
    @if($leftSide)
      <div class="image-animation-block__left">
        <img loading="lazy" src="{{$leftSide['url']}}" alt="">
      </div>
    @endif
    @if($rightSide)
      <div class="image-animation-block__right">
        <video autoplay muted playsinline loop >
          <source src="{{$rightSide['url']}}" type="video/mp4" >
        </video>
      </div>
    @endif
  </div>
</section>
