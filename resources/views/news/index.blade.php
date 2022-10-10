@extends('layout')
@section("meta-title", "News | Shrimpcity")
@section("meta-description", "All the latest news about Shrimpcity.")

@section('content')
    <h1 class="container">News</h2>
    @unless (count($news) === 0)
    <section class="news__wrapper container container--large">
        @foreach($news as $newsItem)
            <a href="/news/{{ $newsItem['slug'] }}" class="news__link">
                <article class="news__item">
                    <img src="{{ $newsItem['image_url'] }}" alt="{{ $newsItem['title'] }}" class="news__image">
                    <div class="news__content">
                        <p class="news__date">
                            <span>{{ date_format(date_create($newsItem['date']), 'd') }}</span>
                            <span>{{ date_format(date_create($newsItem['date']), 'm') }}</span>
                            <span>{{ date_format(date_create($newsItem['date']), 'Y') }}</span>
                        </p>
                        <h3 class="news__title">{{ $newsItem['title'] }}</h2>
                    </div>
               </article>
            </a>
        @endforeach
    </section>
    @else
    <p class="container">No news available.</p>        
    @endunless
@endsection