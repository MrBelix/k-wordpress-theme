@extends('layouts.app')

@section('content')
  @include('partials.page-hero-section', $hero)
  <section class="single-project__section">
    <div class="single-project__slider">
      <div class="swiper-main">
        <div class="swiper-wrapper">
          @foreach($project->getGallery() as $image)
            <div class="swiper-slide">
              <img loading="lazy" src="{{$image['url']}}" alt="">
            </div>
          @endforeach
        </div>
      </div>
      <div class="swiper-preview">
        <div class="swiper-wrapper">
          @foreach($project->getGallery() as $image)
            <div class="swiper-slide">
              <img loading="lazy" src="{{$image['url']}}" alt="">
            </div>
          @endforeach
        </div>
      </div>
    </div>
    @include('partials.project-info', [
      'title' => $project->getTitle(),
      'distinct' => $project->getDistrict(),
      'info' => $project->getInfo()
    ])
  </section>

  @include('blocks.projects-slider-block', $slider)

  @include('components.modal', ['content' => 'components.slider-modal', 'trigger' => 'modal-slider', 'fields' => ['images' => $project->getGallery()]])
@endsection
