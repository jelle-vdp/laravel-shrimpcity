@unless (count($showsSlider) === 0)
<section class="recent-shows-slider">
    @foreach ($showsSlider as $show)
        <div class="recent-shows-slider__slide">
            <div class="recent-shows-slider__image" style="background-image:url({{ $show['image-url'] }});"></div>
            <div class="recent-shows-slider__information">
                <h3 class="recent-shows-slider__headliner">{{ $show['headliner_one'] }}<span>({{$show['headliner_one_country'] }})</span></h2>
                <h4 class="recent-shows-slider__support">+ {{ $show['support_one'] }}</h3>
                <a href="/shows/{{ $show['slug'] }}" class="recent-shows-slider__link"><i class="fa-solid fa-arrow-right-long"></i> More info</a>
                <button class="recent-shows-slider__ticket-btn">Buy tickets</button>
                <time class="recent-shows-slider__date">
                    <span class="recent-shows-slider__day">{{ date_format(date_create($show['date']), 'd') }}</span>
                    <span class="recent-shows-slider__month">{{ date_format(date_create($show['date']), 'm') }}</span>
                    <span class="recent-shows-slider__year">{{ date_format(date_create($show['date']), 'Y') }}</span>
                </time>
            </div>
        </div>
    @endforeach
</section>
@endunless