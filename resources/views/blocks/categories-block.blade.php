@if($title)
  <h2 class="categories-block__title">{!! $title !!}</h2>
@endif
<section class="categories-block" id="categories">
  @if($items)
      <img class="categories-block__desktop-background base" src="{{$desktopBaseImage['url']}}" alt="">
    <div class="categories-block__desktop">
      @foreach($items as $key => $item)
        <img data-for="{{$key}}" class="categories-block__desktop-background" loading="lazy"
             src="{{$item['image']['url']}}" alt="">
        <a href="{{$item['link']}}" class="categories-block__desktop-item" data-target="{{$key}}">
          {!! $item['title'] !!}
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
                    <div class="relative">
                      <img loading="lazy" src="{{$item['mobile_image']['url'] ?? $item['image']['url']}}" alt="{{$item['image']['title']}}">
                      <div class="project-category__imgs-item">{{$item['title']}}</div>
                    </div>
                    <div class="wp-block-button is-style-outline">
                      <a href="{{$item['link']}}" class="wp-block-button__link">{{__('Переглянути більше', 'sage')}}</a>
                    </div>
                  </div>
                </div>
              @endif
            @endforeach
          </div>
        @endif
      </div>
    </div>
  @endif
</section>
