@extends('layouts.app')

@section('content')
  @include('partials.page-hero-section', ['title' => get_the_title(), 'background' => get_the_post_thumbnail_url()])
  {!! the_content() !!}
@endsection
