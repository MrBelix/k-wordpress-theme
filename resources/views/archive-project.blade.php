@extends('layouts.app')

@section('content')
  <h1 class="archive-project__title">{{__('Проєкти', 'sage')}}</h1>
  <section class="archive-project">
    @foreach($categories as $category)
      <a class="archive-project__item" href="{{get_term_link($category)}}">
        <div class="project-category__imgs-item">{{$category->name}}</div>
        <img src="{{get_field('link_image', $category)['url']??null}}" alt="{{$category->name}}">
      </a>
      <div class="wp-block-button is-style-outline">
        <a href="{{get_term_link($category)}}" class="wp-block-button__link">{{__('Переглянути більше', 'sage')}}</a>
      </div>
    @endforeach
  </section>

  <div class="projects-slider-block__links">
      <div class="mobile wp-block-button">
        <a href="{{$whiteButtonList}}"
           class="wp-block-button__link white">{{__('Ознайомитися з подіями', 'sage')}}</a>
      </div>
  </div>
@endsection
