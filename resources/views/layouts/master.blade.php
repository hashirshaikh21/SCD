<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aniflix - Stream your favourite animes for free!</title>
        <link rel="icon" href="{{ asset('/gojo.png') }}" type="image/jpeg"> <!-- Link to the favicon -->
        <link rel="stylesheet" href="{{ asset('/styles.css') }}">
    </head>
    
<body>
    <div class="site-title">
        <img src="{{ asset('/gojo.png') }}" alt="Favicon" class="favicon-img"> <!-- Favicon Image -->
        <h1>Aniflix</h1> <!-- Site Title -->
    </div>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div>
            <a href="{{ route('home') }}" >Home</a>
            <a href="{{ route('library') }}" >Library</a>
            <a href="{{ route('watchlist') }}">Watchlist</a>
        </div>
        <div>
        <a href="{{ route('register') }}" >Register</a>
        <a href="{{ route('login') }}">Login</a>
        </div>
    </nav>
    @yield('content')
    <div class="content" id="watchlist">
        <h2>Your Watchlist</h2>
        <div id="watchlistItems">
            <p>Your watchlist is empty. Add shows from the Library.</p>
        </div>
    </div>
    <script src="{{ asset('/script.js') }}"></script>
</body>
</html>
