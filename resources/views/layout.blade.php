<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shrimpcity</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
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
            <span class="logo">Shrimp<span>city</span></span>
            <nav>
                <ul>
                    <li><a href="/"><span>Home</span></a></li>
                    <li><a href="/shows"><span>Shows</span></a></li>
                    <li><a href="/about"><span>About</span></a></li>
                    <li><a href="/contact"><span>Contact</span></a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
    {{$slot}}
    </main>
    <footer>
        <div class="container">
            <p>&copy; {{date("Y")}} Shrimpcity</p>
        </div>
    </footer>
</body>
</html>