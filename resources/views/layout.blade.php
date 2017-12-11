<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Full stack web developer">
    <meta name="keywords" content="web developer, full stack, backend">
    <meta name="author" content="Marcin Dyszkiewicz">

    <title>Marcin Dyszkiewicz Web Developer @yield('title')</title>

    {{--boostrap--}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    {{--fonts--}}
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    {{--css styles--}}
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <style>

    </style>
</head>

<body>
<header>
    <div class="container">
        <div id="branding">
            <h1>Marcin Dyszkiewicz <span class="highlight">Web Developer</span></h1>
        </div>
        <nav>
            <ul>
                <li id="home"><a href="{{route('index')}}">Home</a></li>
                <li id="portfolio"><a href="{{route('portfolio')}}">Portfolio</a></li>
                <li id="about"><a href="{{route('about')}}">About</a></li>
                <li id="contact"><a href="{{route('contact')}}">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>

<section id="showcase">
    <div class="container">
        <h1>Full Stack Web Developer</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris in malesuada nisi. Nam consectetur diam nec rhoncus ullamcorper. Fusce ac erat cursus, pulvinar diam non, egestas odio.</p>
    </div>
</section>

@yield('section')



<footer>
    <p>Marcin Dyszkiewicz Web Developer, Copyright &copy; 2017 </p>
</footer>
</body>

<script>

    var pathname = window.location.pathname;
    switch(pathname) {
        case "/" :
            console.log("welcome");
            var home = document.querySelector("#home");
            home.classList.toggle("current");
            break;
        case "/portfolio" :
            var portfolio = document.querySelector("#portfolio");
            portfolio.classList.toggle("current");
            break;
        case "/about":
            var about = document.querySelector("#about");
            about.classList.toggle("current");
            break;
        case '/contact':
            var contact = document.querySelector("#contact");
            contact.classList.toggle("current");
    }
</script>
{{--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>--}}
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>--}}
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>--}}
</html>