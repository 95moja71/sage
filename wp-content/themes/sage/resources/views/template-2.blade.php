<?php /* Template Name: قالب دوم */ ?>
{{--
  Template Name: قالب دوم
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.sidebar')
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile
@endsection
