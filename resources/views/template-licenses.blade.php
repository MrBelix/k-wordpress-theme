{{--
  Template Name: Licenses Template
--}}

@extends('layouts.app')

@section('content')
  @include('partials.page-hero-section', ['title' => $title, 'background' => $background, 'is_video' => true])
  <div class="licenses-template__content">
    <section class="licenses-slider">
      <div class="swiper">
          <div class="swiper-wrapper">
            @foreach($licenses as $image)
              <div class="swiper-slide">
                <img loading="lazy" src="{{get_the_post_thumbnail_url($image)}}" alt="">
              </div>
            @endforeach
          </div>
        <div class="swiper-button swiper-button-prev">

        </div>
        <div class="swiper-button swiper-button-next">

        </div>
      </div>
    </section>
    <section class="acknowledgments-slider">
      <h2>Подяки</h2>
      <div class="swiper">
        <div class="swiper-wrapper">
          @foreach($acknowledgments as $image)
            <div class="swiper-slide">
              <img loading="lazy" src="{{get_the_post_thumbnail_url($image)}}" alt="">
            </div>
          @endforeach
        </div>
        <div class="swiper-button swiper-button-prev">

        </div>
        <div class="swiper-button swiper-button-next">

        </div>
      </div>
    </section>
    <section class="content-block">
      {!! get_the_content() !!}
    </section>
  </div>
  @include('blocks.projects-slider-block', $slider)
@endsection
