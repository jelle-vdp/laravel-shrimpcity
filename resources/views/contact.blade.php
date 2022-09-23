@component('layout')
@section("meta-title", "Contact us | Shrimpcity")
@section("meta-description", "Got a question about Shrimpcity? Feel free to send us a message and we'll respond as soon as possible")

    <h1 class="container container--small">Contact</h2>
    @if (isset($message))
        <p class="contact__message container container--small">
            {{ $message }}
        </p>
        <p class="contact__link container container--small">
            <a href="/"><i class="fa-solid fa-arrow-right-long"></i> Return to the homepage</a>
        </p>
    @else
    <form class="contact__form container container--small" action="{{route('send.email')}}" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Enter your name">
        <label for="email">Email Address</label>
        <input type="email" name="email" id="email" placeholder="Enter your emailadress">
        <label for="message">Message</label>
        <textarea name="message" id="message" cols="30" rows="10" placeholder="Enter your message"></textarea>
        <button type="submit">Send your message</button>
    </form>
    @endif
@endcomponent