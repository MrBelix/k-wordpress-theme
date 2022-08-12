@extends('layouts.app')

@section('content')
  @if(!$is_parent)
  @include('partials.page-hero-section', $hero)
  <section class="project-category">
    @while(have_posts()) @php(the_post())
      <div class="project-category__item">
        @php($project = new \App\Models\Project(get_post()))
        <a href="{{$project->getUrl()}}" class="project-category__item-image">
          <img loading="lazy" src="{{$project->getGallery()[0]['url']}}" alt="{{$project->getTitle()}}">
        </a>
        @include('partials.project-info', [
          'title' => $project->getTitle(),
          'distinct' => $project->getDistrict(),
          'info' => $project->getInfo()
])
      </div>
    @endwhile
  </section>
  @if(!empty($links))
  <section class="project-category__links mobile">
    @foreach($links as $link)
    <div class="wp-block-button is-style-outline">
      <a href="{{$link['link']}}" class="wp-block-button__link">{{$link['name']}}</a>
    </div>
    @endforeach
  </section>

  <section class="project-category__imgs desktop">
    <blockquote class="wp-block-quote">
      <p>{!! __('НАВІЩО МАЛЮВАТИ В УЯВІ,<br> КОЛИ КРАЩЕ ПОБАЧИТИ ', 'sage') !!}</p>
    </blockquote>
    <div class="project-category__imgs-wrapp">
      @foreach($links as $link)
        <a href="{{$link['link']}}">
          <div class="project-category__imgs-item">{{$link['name']}}</div>
          <img src="{{$link['image']}}" alt="{{$link['name']}}">
        </a>
      @endforeach
    </div>
  </section>
  @endif

  @else
    <section class="project-category__imgs parent">
      <div class="project-category__imgs-wrapp">
        @foreach($children as $link)
          <a href="{{get_term_link($link)}}">
            <div class="project-category__imgs-item">
              @if($link->nameS[0])
                <h2>{!! $link->nameS[0] !!}</h2>
              @endif
              @if($link->nameS[1])
                <h3>{!! $link->nameS[1] !!}</h3>
                @endif
            </div>
            <img src="{{get_field('link_image', $link)['url']??null}}" alt="{{$link->name}}">
          </a>
        @endforeach
      </div>
      @include('partials.back-button')
    </section>
  @endif
@endsection
