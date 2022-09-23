@component('layout')
@section("meta-title", $gig['headliner_one']. " | Shrimpcity")
@section("meta-description", $gig['summary'])

    <section class="single-gig">
        <div class="single-gig__bands-date-wrapper">
            <div class="container">
                <img class="single-gig__image" src="{{ $gig['logo-url'] }}">
                <div class="single-gig__bands-date-wrapper">
                    <div class="single-gig__bands-wrapper">
                        <h1 class="single-gig__headliner">{{ $gig['headliner_one'] }}<span>({{$gig['headliner_one_country'] }})</span></h2>
                        <h2 class="single-gig__support">+ {{ $gig['first_support_band'] }}</h3>
                    </div>
                    <div class="single-gig__info-button-wrapper">
                        <div class="single-gig__extra-info-wrapper">
                            <p class="single-gig__explanation">When?</p>
                            <div class="single-gig__date">
                                <span class="single-gig__day">{{ date_format(date_create($gig['date']), 'd') }}</span>
                                <span class="single-gig__month">{{ date_format(date_create($gig['date']), 'm') }}</span>
                                <span class="single-gig__year">{{ date_format(date_create($gig['date']), 'Y') }}</span>
                            </div>
                            <p class="single-gig__explanation">Where?</p>
                            <h4 class="single-gig__venue">{{ $gig['venue'] }}</h4>
                            <p class="single-gig__explanation">Timetable</p>
                            <div class="single-gig__timings">
                                <p class="single-gig__timing"><span>19h00:</span> <span>Doors</span></p>
                                <p class="single-gig__timing"><span>20h00:</span> <span>{{ $gig['first_support_band'] }}</span></p>
                                <p class="single-gig__timing"><span>21h00:</span> <span>{{ $gig['headliner_one'] }}</span></p>
                            </div>
                            <p class="single-gig__explanation">Tickets</p>
                            <div class="single-gig__ticket-prices">
                                <p>€{{ $gig['price'] - 2 }}<span class="single-gig__ticket-type">/ Pre-sale</span></p>
                                <p>€{{ $gig['price'] }}<span class="single-gig__ticket-type">/ At the door</span></p>
                            </div>
                        </div>
                        <div class="single-gig__ticket-button-wrapper">
                            <button><i class="fa-solid fa-ticket"></i> Buy tickets</button>
                        </div>
                    </div>
                </div>   
            </div>   
        </div>

        <div class="single-gig__description container">
            <section>
                <header>
                    <h2>{{ $gig['headliner_one'] }}</h2>
                    <div class="single-gig__social-media-wrapper">
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </header>
                @foreach ($description_headliner as $description)
                    <p>{!! $description !!}</p>
                @endforeach
            </section>
            <section>
                <header>
                    <h2>{{ $gig['first_support_band'] }}</h2>
                    <div class="single-gig__social-media-wrapper">
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </header>
                @foreach ($description_support as $description)
                    <p>{!! $description !!}</p>
                @endforeach
            </section>
        </div>
    </section>
@endcomponent