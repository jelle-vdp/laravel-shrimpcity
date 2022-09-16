@component('layout')
    @include('partials._hero')
    @include('partials._recent-news')
    <section class="container gigs-container">
        <h2>Upcoming gigs</h2>
        @unless (count($gigs) === 0)
        <section class="gigs"> 
            @foreach ($gigs as $gig)
                <a class="gig__link" href="/shows/{{ $gig['slug'] }}">
                    <article class="gig__wrapper">
                        <img class="gig__image" src="{{ $gig['logo-url']}}">
                        <div class="gig__info">
                            <div class="gig__date">
                                <span class="gig__day">{{ date_format(date_create($gig['date']), 'd') }}</span>
                                <span class="gig__month">{{ date_format(date_create($gig['date']), 'm') }}</span>
                                <span class="gig__year">{{ date_format(date_create($gig['date']), 'Y') }}</span>
                            </div>
                            <div class="gig__bands">
                                <h3 class="gig__headliner">{{ $gig['headliner_one'] }}<span>({{$gig['headliner_one_country'] }})</span></h2>
                                <h4 class="gig__support">+ {{ $gig['first_support_band'] }}</h3>
                            </div>
                        </div>
                    </article>
                </a>
            @endforeach
        </section>

        @else

        <p>No gigs available.</p>
            
        @endunless
    </section>
@endcomponent
