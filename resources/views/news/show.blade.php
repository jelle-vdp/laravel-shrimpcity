@component('layout')
@section("meta-title", $news['title']. " | Shrimpcity")
@section("meta-description", $news['summary'])

    <div class="single-news__image" style="background-image:url({{ $news['image_url'] }})">
        <div class="container">
            <header>
                <time class="single-news__date" datetime="{{date_format(date_create($news['fake_date']), 'YYYY-MM-DDThh:mm:ssTZD')}}">
                    <span>{{ date_format(date_create($news['fake_date']), 'd') }}</span>
                    <span>{{ date_format(date_create($news['fake_date']), 'm') }}</span>
                    <span>{{ date_format(date_create($news['fake_date']), 'Y') }}</span>
                </time>
                <h1>{{ $news['title'] }}</h1>
            </header>
        </div>
    </div>
    <div class="container">
        <section class="single-news__body">
            <h2>{{ $news['summary'] }}</h2>
            @foreach ($body as $bodyParagraph)
                <p>{!! $bodyParagraph !!}</p>
            @endforeach
        </section>
        <section class="single-news__other-items">
            <h2>Other news</h2>
            @foreach ($other_news as $otherNewsItem)
            <a href="/news/{{ $otherNewsItem['slug']}}">
                <img src="{{ $otherNewsItem['image_url']}}">
                <time class="single-news__date" datetime="{{date_format(date_create($otherNewsItem['fake_date']), 'YYYY-MM-DDThh:mm:ssTZD')}}">
                    <span>{{ date_format(date_create($otherNewsItem['fake_date']), 'd') }}</span>
                    <span>{{ date_format(date_create($otherNewsItem['fake_date']), 'm') }}</span>
                    <span>{{ date_format(date_create($otherNewsItem['fake_date']), 'Y') }}</span>
                </time>
                <h3>{{ $otherNewsItem['title']}}</h3>
                <p><i class="fa-solid fa-arrow-right-long"></i> Read more</p>
            </a>
            @endforeach
        </section>
    </div>
@endcomponent