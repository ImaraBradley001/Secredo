<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Parisienne&family=Rubik&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('images/icon.png') }}" type="image/header_section-icon">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <title>||Your Secret Diary</title>
</head>
<body>

    <!--Header Section-->
    <header id="header">
        <a href="/">
            <div class="logo">
            <img src="{{ asset('images/icon.png') }}" alt="">
            <h1>Secredo</h1>
        </div>
        </a>
        @auth
            <p class="header-description">WELCOME  <b>{{ strtoupper(auth()->user()->name) }}</b>
        @else
            <p class="header-description">Your  <b>Secrets</b> Are <b>Safe</b> With <b>Us</b>!</p>
        @endauth
        <nav>
            <ul>
                @auth
                    <form action="/logout" class="inline"  method="POST">
                        @csrf
                        <button type="submit">
                            Logout
                        </button>
                    </form>
                @else
                    <li><a href="/login" id="login-link">Login</a></li>
                @endauth
                <li><a href="/#about">About</a></li>
                <li><a href="/#features">Features</a></li>
                <li><a href="/journal/show" id="journal-btn">Journal</a></li>
            </ul>
        </nav>
    </header>
        {{ $slot }}
    <!--Footer Section-->
    <footer class="bg-slate-600">
        <a href="/"><h1>Secredo</h1></a>
        <div class="social-media">
            <i class="fab fa-facebook"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-whatsapp"></i>
            <i class="fab fa-github"></i>
        </div>
        <div class="dev-contact">
            <p>Contact Developer</p>
            <i class="fa-solid fa-envelope"></i> <a href="mailto:devimara@gmail.com">Email</a>
            <br>
            <i class="fa-solid fa-phone"></i> +256 702 329 686
            <p>Copyright Secredo Inc. 2022</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    <script src="{{ asset('js/index.js') }}"></script>
    <script src="{{ asset('js/load_header.js') }}"></script>

    <x-flash-message />
</body>
</html>