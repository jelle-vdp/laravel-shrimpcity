@extends('layout')
@section("meta-title", $news['title']. " | Shrimpcity")
@section("meta-description", $news['summary'])

@section('content')
    <div class="single-news__image" style="background-image:url({{ $news['image_url'] }})">
        <div class="container">
            <header>
                <h1>{{ $news['title'] }}</h1>
                <div class="single-news__date-wrapper">
                    <time class="single-news__date" datetime="{{date_format(date_create($news['fake_date']), 'YYYY-MM-DDThh:mm:ssTZD')}}">
                        <span>{{ date_format(date_create($news['date']), 'd') }}</span>
                        <span>{{ date_format(date_create($news['date']), 'm') }}</span>
                        <span>{{ date_format(date_create($news['date']), 'Y') }}</span>
                    </time>
                </div>
            </header>
        </div>
    </div>
    <div class="single-news__body-wrapper container">
        <section class="single-news__body">
            <h2>{{ $news['summary'] }}</h2>
            @foreach ($body as $bodyParagraph)
                <p>{!! $bodyParagraph !!}</p>
            @endforeach
        </section>
        <section class="single-news__other-items">
            <h2>Other news</h2>
            <div class="single-news__other-items-body">
                @foreach ($other_news as $otherNewsItem)
                <a href="/news/{{ $otherNewsItem['slug']}}">
                    <img src="{{ $otherNewsItem['image_url']}}">
                    <time class="single-news__date" datetime="{{date_format(date_create($otherNewsItem['fake_date']), 'YYYY-MM-DDThh:mm:ssTZD')}}">
                        <span>{{ date_format(date_create($otherNewsItem['date']), 'd') }}</span>
                        <span>{{ date_format(date_create($otherNewsItem['date']), 'm') }}</span>
                        <span>{{ date_format(date_create($otherNewsItem['date']), 'Y') }}</span>
                    </time>
                    <h3>{{ $otherNewsItem['title']}}</h3>
                    <p><i class="fa-solid fa-arrow-right-long"></i> Read more</p>
                </a>
                @endforeach
            </div>
        </section>
    </div>
@endsection