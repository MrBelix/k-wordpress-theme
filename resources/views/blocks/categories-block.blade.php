<section class="categories-block" id="categories">
  @if($title)
    <h2 class="categories-block__title">{{$title}}</h2>
  @endif
  @if($items)
    <div class="categories-block__desktop">
      @foreach($items as $key => $item)
        <img data-for="{{$key}}" class="categories-block__desktop-background" loading="lazy"
             src="{{$item['image']['url']}}" alt="">
        <a href="{{$item['link']}}" class="categories-block__desktop-item" data-target="{{$key}}">
          {{$item['title']}}
        </a>
      @endforeach
    </div>
    <div class="categories-block__mobile">
      <div class="swiper">
        @if($items)
          <div class="swiper-wrapper">
            @foreach($items as $item)
              @if($item['show_mobile'])
                <div class="swiper-slide">
                  <div class="categories-block__mobile-item">
                    <h3>{{$item['title']}}</h3>
                    <img loading="lazy" src="{{$item['image']['url']}}" alt="{{$item['image']['title']}}">
                    <div class="wp-block-button is-style-outline">
                      <a href="{{$item['link']}}" class="wp-block-button__link">{{pll__('Переглянути всі')}}</a>
                    </div>
                  </div>
                </div>
              @endif
            @endforeach
          </div>
        @endif
        <div class="swiper-button swiper-button-prev">

        </div>
        <div class="swiper-button swiper-button-next">

        </div>
      </div>
    </div>
  @endif
</section>
