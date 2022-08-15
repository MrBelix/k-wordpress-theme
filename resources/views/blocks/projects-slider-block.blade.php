<section class="projects-slider-block">
  @if(!empty($title))
    <h2>{{$title}}</h2>
  @endif
  @if(!empty($projects))
    <div class="swiper">
      <div class="swiper-wrapper">
        @foreach($projects as $project)
          <a class="swiper-slide" href="{{$project->getUrl()}}">
            <img src="{{$project->getThumbnail()['url']}}" alt="{{$project->getTitle()}}">
            <h3>{!! $project->getTitle() !!}</h3>
          </a>
        @endforeach
      </div>
    </div>
  @endif
  <div class="projects-slider-block__links">
    @if(!empty($link))
      <div class="wp-block-button is-style-outline">
        <a href="{{$link['url']}}" class="wp-block-button__link">{{__('Переглянути більше', 'sage')}}</a>
      </div>
    @endif
    @if(!empty($whiteButtonLink))
      <div class="mobile wp-block-button">
        <a href="{{$whiteButtonList['url']}}"
           class="wp-block-button__link white">{{__('Ознайомитися з проектами', 'sage')}}</a>
      </div>
    @endif
  </div>
</section>
