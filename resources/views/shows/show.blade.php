@extends('layout')
@section("meta-title", $show['headliner_one']. " | Shrimpcity")
@section("meta-description", $show['summary'])

@section('content')
    <section class="single-show">
        <div class="single-show__bands-date-wrapper">
            <div class="container">
                <div class="single-show__image" style="background-image:url({{ $show['image-url'] }})"></div>
                <div class="single-show__bands-date-wrapper">
                    <div class="single-show__bands-wrapper">
                        <h1 class="single-show__headliner">{{ $show['headliner_one'] }}<span>({{$show['headliner_one_country'] }})</span></h2>
                        <h2 class="single-show__support">+ {{ $show['support_one'] }}</h3>
                    </div>
                    <div class="single-show__info-button-wrapper">
                        <div class="single-show__extra-info-wrapper">
                            <p class="single-show__explanation">When?</p>
                            <time class="single-show__date">
                                <span class="single-show__day">{{ date_format(date_create($show['date']), 'd') }}</span>
                                <span class="single-show__month">{{ date_format(date_create($show['date']), 'm') }}</span>
                                <span class="single-show__year">{{ date_format(date_create($show['date']), 'Y') }}</span>
                            </time>
                            <p class="single-show__explanation">Where?</p>
                            <h4 class="single-show__venue">{{ $show['venue'] }}</h4>
                            <p class="single-show__explanation">Timetable</p>
                            <div class="single-show__timings">
                                <p class="single-show__timing"><span>19h00:</span> <span>Doors open</span></p>
                                <p class="single-show__timing"><span>20h00:</span> <span>{{ $show['support_one'] }}</span></p>
                                <p class="single-show__timing"><span>21h00:</span> <span>{{ $show['headliner_one'] }}</span></p>
                            </div>
                            <p class="single-show__explanation">Tickets</p>
                            <div class="single-show__ticket-prices">
                                <p>€{{ number_format($show['price'] - 2, 2) }}<span class="single-show__ticket-type">/ Pre-sale</span></p>
                                <p>€{{ $show['price'] }}<span class="single-show__ticket-type">/ At the door</span></p>
                            </div>
                        </div>
                        <div class="single-show__ticket-button-wrapper">
                            <button><i class="fa-solid fa-ticket"></i> <span>Buy tickets</span></button>
                        </div>
                    </div>
                </div>   
            </div>   
        </div>

        <div class="single-show__description container container--small">
            <section>
                <header>
                    <h2>{{ $show['headliner_one'] }}</h2>
                    <div class="single-show__social-media-wrapper">
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
                    <h2>{{ $show['first_support_band'] }}</h2>
                    <div class="single-show__social-media-wrapper">
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </header>
                @foreach ($description_support as $description)
                    <p>{!! $description !!}</p>
                @endforeach
            </section>
            <section class="single-show__more-info--mobile">
                <p class="single-show__explanation">Venue</p>
                <h4 class="single-show__venue">{{ $show['venue'] }}</h4>
                <p class="single-show__explanation">Timetable</p>
                <div class="single-show__timings">
                    <p class="single-show__timing"><time>19h00</time> <span><span>Doors open</span></span></p>
                    <p class="single-show__timing"><time><span>20h00</span><span>-</span><span>20h30</span></time> <span><span>{{ $show['first_support_band'] }}</span></span></p>
                    <p class="single-show__timing"><time><span>21h00</span><span>-</span><span>21h50</span></time> <span><span>{{ $show['headliner_one'] }}</span></span></p>
                </div>
                <p class="single-show__explanation">Tickets</p>
                <div class="single-show__ticket-prices">
                    <p><span>€{{ number_format($show['price'] - 2, 2) }}</span><span class="single-show__ticket-type">Pre-sale</span></p>
                    <p><span>€{{ $show['price'] }}</span><span class="single-show__ticket-type">At the door</span></p>
                </div>
                <div class="single-show__ticket-button-wrapper">
                    <button><i class="fa-solid fa-ticket"></i> <span>Buy tickets</span></button>
                </div>
                </div>
            </section>
        </div>
    </section>
@endsection