<section class="home-video-slider-block">
  @if(!empty($videos))
    <div class="swiper desktop">
      <div class="swiper-wrapper">
        @foreach($videos as $video)
          <div class="swiper-slide">
            {!! $video['iframe'] !!}
            <h3>{{$video['title']}}</h3>
          </div>
        @endforeach
      </div>
    </div>
    <div class="home-video-slider-block__list mobile">
      @for($i=0; $i < 2; $i++)
        <div class="home-video-slider-block__item">
          {!! $videos[$i]['iframe'] !!}
          <h3>{{$videos[$i]['title']}}</h3>
        </div>
      @endfor
    </div>
    @endif
    @if($link)
    <div class="home-video-slider-block__links">
      <div class="wp-block-button is-style-outline">
        <a href="{{$link['url']}}" class="wp-block-button__link">{{pll__('Переглянути більше')}}</a>
      </div>
    </div>
      @endif
</section>
