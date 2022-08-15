<section class="video-slider-block">
  <h2>{{$title}}</h2>

  <div class="video-slider-block__wrapper">
  <div class="swiper">
    <div class="swiper-wrapper">
      @foreach($videos as $video)
        <div class="swiper-slide" data-video-id="{{$video['iframe']}}">
          <div class="img">
            <img src="{{$video['image']['url']}}" alt="">
          </div>
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
      <div class="video-slider-block__item" data-video-id="{{$video['iframe']}}">
        <div class="iframe">
        </div>
        <div class="img">
          <img src="{{$video['image']['url']}}" alt="">
        </div>
        <h3>{!! $video['title'] !!}</h3>
        <h4>{{$video['district']}}</h4>
      </div>
    @endforeach
  </div>
</section>
