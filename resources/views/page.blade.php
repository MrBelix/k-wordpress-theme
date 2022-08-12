@extends('layouts.app')
@php($background = get_field('background')['url']?? get_the_post_thumbnail_url())
@php($background_mobile = get_field('background_mobile')['url'] ?? null)

@section('content')
  @include('partials.page-hero-section', [
    'title' => get_the_title(),
     'background' => $background,
      'background_mobile' => $background_mobile,
       'is_video' => preg_match('#.mp4#', $background)
       ])
  {!! the_content() !!}
@endsection
