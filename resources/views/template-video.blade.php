{{--
  Template Name: Video Template
--}}

@extends('layouts.app')
@php($background = get_field('background')['url']?? get_the_post_thumbnail_url())
@section('content')
  @include('partials.page-hero-section', ['title' => get_the_title(), 'background' => $background, 'is_video' => preg_match('#.mp4#', $background)])
  {!! the_content() !!}
@endsection
