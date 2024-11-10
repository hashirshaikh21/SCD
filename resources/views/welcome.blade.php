@extends('layouts/master')
@section('content')
    <!-- Home Page -->
<div class="content active" - id="home">
    <h2>Latest Releases</h2>
    <div class="anime-list">
        
        <div class="anime-item">
            <img src="{{ asset('/demon.jpg') }}" alt="Demon Slayer">
            <p>Demon Slayer S3- New Episode Released!</p>
            <button class="watchlist-button" onclick="addToWatchlist('Demon Slayer','demon.jpg')">Add to Watchlist</button>
        </div>
        <div class="anime-item">
            <img src="{{ asset('/onepiece.jpg') }}" alt="One Piece">
            <p>One Piece - New Episode Released!</p>
            <button class="watchlist-button" onclick="addToWatchlist('One Piece','onepiece.jpg')">Add to Watchlist</button>
        </div>
        <div class="anime-item">
            <img src="{{ asset('/naruto.jpg') }}" alt="Naruto">
            <p>Naruto - New Episode Released!</p>
            <button class="watchlist-button" onclick="addToWatchlist('Naruto','naruto.jpg')">Add to Watchlist</button>
        </div>
        <div class="anime-item">
            <img src="{{ asset('/jjk.jpg') }}" alt="Jujutsu Kaisen">
            <p>Jujutsu Kaisen - New Episode Released!</p>
            <button class="watchlist-button" onclick="addToWatchlist('Jujutsu Kaisen','jjk.jpg')">Add to Watchlist</button>
        </div>
        <div class="anime-item">
            <img src="{{ asset('/aot.webp') }}" alt="Attack on Titan">
            <p>Attack on Titan Season 4 - New Episode Released!</p>
            <button class="watchlist-button" onclick="addToWatchlist('Attack on Titan','aot.webp')">Add to Watchlist</button>
        </div>
        <div class="anime-item">
            <img src="{{ asset('/bleach.jpg') }}" alt="Bleach">
            <p>Bleach - New Episode Released!</p>
            <button class="watchlist-button" onclick="addToWatchlist('Bleach','bleach.jpg')">Add to Watchlist</button>
        </div>
        <div class="anime-item">
            <img src="{{ asset('/rezero.jpg') }}" alt="Re:Zero">
            <p>Re:Zero Season 2 - New Episode Released!</p>
            <button class="watchlist-button" onclick="addToWatchlist('Re:Zero Season 2','rezero.jpg')">Add to Watchlist</button>
        </div>
        <div class="anime-item">
            <img src="{{ asset('/mha.jpg') }}" alt="My Hero Academia">
            <p>My Hero Academia Season 5 - New Episode Released!</p>
            <button class="watchlist-button" onclick="addToWatchlist('My Hero Academia Season 5','mha.jpg')">Add to Watchlist</button>
        </div>
    </div>


        <!-- Feedback Form -->
        @include('layouts.feedback')
        @include('layouts.footer')

    </div>
</div>

@endsection