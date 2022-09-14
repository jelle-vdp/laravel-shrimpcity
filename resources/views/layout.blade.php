<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shrimptown</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
    <script type="module">
        var slider = tns({
          container: '.recent-gigs-slider',
          items: 1,
          slideBy: 'page',
          autoplay: false,
          nav: false,
          controlsText: ['<', '>']
        });
    </script>
</head>
<body>
    <header>
        <div class="container">
            <span class="logo">Shrimp<span>town</span></span>
            <nav>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/gigs">Gigs</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
    {{$slot}}
    </main>
    <footer>
        <div class="container">
            <p>&copy; {{date("Y")}} Shrimptown</p>
        </div>
    </footer>
</body>
</html>