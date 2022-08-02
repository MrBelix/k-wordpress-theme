<section class="projects-slider-block">
  @if($title)
    <h2>{{$title}}</h2>
  @endif
  @if(!empty($projects))
    <div class="swiper">
      <div class="swiper-wrapper">
        @foreach($projects as $project)
          <a class="swiper-slide" href="{{$project->getUrl()}}">
            <img src="{{$project->getThumbnail()['url']}}" alt="{{$project->getTitle()}}">
            <h3>{{$project->getTitle()}}</h3>
          </a>
        @endforeach
      </div>
    </div>
  @endif
  @if($link)
    <div class="projects-slider-block__links">
      <div class="wp-block-button is-style-outline">
        <a href="{{$link['url']}}" class="wp-block-button__link">{{pll__('Переглянути більше')}}</a>
      </div>
    </div>
  @endif
</section>
