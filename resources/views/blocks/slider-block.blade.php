<section class="slider-block">
  @if($title)
    <h2 class="slider-block__title">{{$title}}</h2>
  @endif
  <div class="swiper">
    @if($items)
      <div class="swiper-wrapper">
        @foreach($items as $item)
          <div class="swiper-slide">
            <img loading="lazy" src="{{$item['image']['url']}}" alt="{{$item['image']['title']}}">
          </div>
        @endforeach
      </div>
    @endif
      <div class="swiper-button swiper-button-prev">

      </div>
      <div class="swiper-button swiper-button-next">

      </div>
  </div>
</section>
