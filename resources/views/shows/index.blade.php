@extends('layout')
@section("meta-title", "Upcoming shows | Shrimpcity")
@section("meta-description", "Read all about the upcoming shows in Shrimpcity.")

@section('content')
    <section class="container shows-ov">
        <h1>Upcoming shows</h1>
        @unless (count($shows) === 0)
        <section class="shows"> 
            @foreach ($shows as $show)
                <a class="show__link" href="/shows/{{ $show['slug'] }}" >
                    <article class="show__wrapper">
                        <img src="{{ $show['image-url'] }}">
                        <div class="show__info">
                            <div class="show__info-left">
                                <div class="show__info-left-top">
                                    <time class="show__date">
                                        <span class="show__day">{{ date_format(date_create($show['date']), 'd') }}</span>
                                        <span class="show__month">{{ date_format(date_create($show['date']), 'm') }}</span>
                                        <span class="show__year">{{ date_format(date_create($show['date']), 'Y') }}</span>
                                    </time>
                                    <p class="show__venue">
                                        <span class="show__venue-prefix">At</span>
                                        <span>{{ $show['venue'] }}</span>
                                    </p>
                                </div>
                                <div class="show__bands">
                                    <h3 class="show__headliner">{{ $show['headliner_one'] }}<span>({{$show['headliner_one_country'] }})</span></h2>
                                    <h4 class="show__support">+ {{ $show['support_one'] }}</h3>
                                </div>
                                <div class="show__tags">
                                    <span>> Tags: </span> 
                                    @foreach (json_decode($show['tags']) as $tag)
                                        <span class="show__tags-item">{{$tag}}</span>
                                    @endforeach
                                </div>
                            </div>
                            <div class="show__info-right">
                                <div class="show__price">
                                    <p>€{{ number_format($show['price'] - 2, 2) }}<span class="show__ticket-type">/ Pre-sale</span></p>
                                    <p>€{{ $show['price'] }}<span class="show__ticket-type">/ At the door</span></p>    
                                </div>
                                <button>Buy Tickets</button>
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
@endsection
