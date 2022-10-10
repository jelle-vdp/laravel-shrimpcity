@extends('layout')

@section("meta-title", "Shrimpcity | Music venue for Shrimps")
@section("meta-description", "Shrimpcity is a music venue that organises on average 200 music shows each year. Located in the heart of Shrimptown, it's easy accesible by public transport.")

@push("extra-scripts")
<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
<script type="module">
    var slider = tns({
      container: '.recent-shows-slider',
      items: 1,
      slideBy: 'page',
      autoplay: true,
      speed: 1000,
      autoplayButtonOutput: false,
      nav: false,
      controlsText: ['<', '>']
    });
</script>
@endpush

@push('extra-styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
@if($isMobile)
    <style>
        .news-recent__wrapper {
            grid-template-columns: 1fr 1fr;
        }
    </style>
@else
    <style>
        .news-recent__wrapper {
            grid-template-columns: 1fr 1fr 1fr;
        }
    </style>
@endif
@endpush


@section('content')
    @include('partials._slider')
    @include('partials._recent-news')
    @include('partials._upcoming-shows')
@endsection
