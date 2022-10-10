<section class="container shows-container">
    <h2>Upcoming shows</h2>
    @unless (count($showsOv) === 0)
    <section class="shows"> 
        @foreach ($showsOv as $show)
            <a class="show__link" href="/shows/{{ $show['slug'] }}">
                <article class="show__wrapper">
                    <div class="show__info">
                        <time class="show__date">
                            <span class="show__day">{{ date_format(date_create($show['date']), 'd') }}</span>
                            <span class="show__month">{{ date_format(date_create($show['date']), 'm') }}</span>
                            <span class="show__year">'{{ date_format(date_create($show['date']), 'y') }}</span>
                        </time>
                        <div class="show__bands">
                            <h3 class="show__headliner">{{ $show['headliner_one'] }}<span>({{$show['headliner_one_country'] }})</span></h2>
                            <h4 class="show__support">+ {{ $show['support_one'] }}</h3>
                        </div>
                    </div>
                </article>
            </a>
        @endforeach
    </section>
    @else
    <p>No shows available.</p>
    @endunless
</section>