<div class="swiper-modal swiper">
  <div class="swiper-wrapper">
    @foreach($images as $image)
      <div class="swiper-slide">
        <img loading="lazy" src="{{$image['url']}}" alt="">
      </div>
    @endforeach
  </div>
  <div class="swiper-button swiper-button-prev">

  </div>
  <div class="swiper-button swiper-button-next">

  </div>
</div>
