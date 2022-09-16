<section class="recent-gigs-slider">
    @foreach ($gigs as $gig)
        <div class="recent-gigs-slider__slide">
            <div class="recent-gigs-slider__image" style="background-image:url({{ $gig['logo-url'] }});"></div>
            <div class="recent-gigs-slider__information">
                <h3 class="recent-gigs-slider__headliner">{{ $gig['headliner_one'] }}<span>({{$gig['headliner_one_country'] }})</span></h2>
                <h4 class="recent-gigs-slider__support">+ {{ $gig['first_support_band'] }}</h3>
                <button class="recent-gigs-slider__ticket-btn">Buy tickets</button>
                <div class="recent-gigs-slider__date">
                    <span class="recent-gigs-slider__day">{{ date_format(date_create($gig['date']), 'd') }}</span>
                    <span class="recent-gigs-slider__month">{{ date_format(date_create($gig['date']), 'm') }}</span>
                    <span class="recent-gigs-slider__year">{{ date_format(date_create($gig['date']), 'Y') }}</span>
                </div>
            </div>
        </div>
    @endforeach
</section>