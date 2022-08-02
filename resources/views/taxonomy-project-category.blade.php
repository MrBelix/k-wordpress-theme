@extends('layouts.app')

@section('content')
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
  <section class="project-category__links">
    @foreach($links as $link)
    <div class="wp-block-button is-style-outline">
      <a href="{{$link['link']}}" class="wp-block-button__link">{{$link['name']}}</a>
    </div>
    @endforeach
  </section>
@endsection
