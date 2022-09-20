@component('layout')
    <h1 class="container">Contact</h2>
    @if (isset($message))
        <p class="contact__message container">
            {{ $message }}
        </p>
        <p class="contact__link container">
            <a href="/"><i class="fa-solid fa-arrow-right-long"></i> Return to the homepage</a>
        </p>
    @else
    <form class="contact__form container" action="{{route('send.email')}}" method="POST">
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