<section class="video-slider-block">
  @if($title)
    <h2>{{$title}}</h2>
  @endif
  @if(!empty($videos))
    <div class="swiper">
      <div class="swiper-wrapper">
        @foreach($videos as $video)
          <div class="swiper-slide">
            {!! $video['iframe'] !!}
            <h3>{{$video['title']}}</h3>
            <h4>{{$video['district']}} обл.</h4>
          </div>
        @endforeach
      </div>
    </div>
    @endif
</section>
