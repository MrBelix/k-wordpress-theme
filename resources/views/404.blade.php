@extends('layouts.app')

@section('content')
  @if (! have_posts())
    {!! get_search_form(false) !!}
  @endif
@endsection
