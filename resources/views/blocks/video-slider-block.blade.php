<section class="video-slider-block">
  <h2>{{$title}}</h2>

  <div class="video-slider-block__wrapper">
  <div class="swiper">
    <div class="swiper-wrapper">
      @foreach($videos as $video)
        <div class="swiper-slide">
          {!! $video['iframe'] !!}
          <h3>{!! $video['title'] !!}</h3>
          <h4>{{$video['district']}}</h4>
        </div>
      @endforeach
    </div>
    <div class="swiper-button swiper-button-prev">

    </div>
    <div class="swiper-button swiper-button-next">

    </div>
  </div>
  </div>

  <div class="video-slider-block__desktop">
    @foreach($videos as $video)
      <div class="video-slider-block__item">
        {!! $video['iframe'] !!}
        <h3>{!! $video['title'] !!}</h3>
        <h4>{{$video['district']}}</h4>
      </div>
    @endforeach
  </div>
</section>
