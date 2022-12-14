<section class="news-recent container">
    <h2>Recent news</h2>
    @unless (count($news) === 0)
    <div class="news-recent__wrapper">
        @foreach ($news as $newsItem)
            <a class="news-recent__link" href="/news/{{ $newsItem['slug'] }}">
                <article>
                    <img src="{{ $newsItem['image_url'] }}">
                    <div class="news-recent__title-wrapper">
                        <h3>{{ $newsItem['title'] }}</h3>
                        <p class="news-recent__read-more"><i class="fa-solid fa-arrow-right-long"></i> Read more</p>
                    </div>
                    <time class="news-recent__date">
                        <span class="news-recent__day">{{ date_format(date_create($newsItem['date']), 'd') }}</span>
                        <span class="news-recent__month">{{ date_format(date_create($newsItem['date']), 'F') }}</span>
                        <span class="news-recent__year">{{ date_format(date_create($newsItem['date']), 'Y') }}</span>
                    </time>
                </article>
            </a>
        @endforeach
    </div>
    @else
    <p>No news available.</p>
    @endunless
</section>