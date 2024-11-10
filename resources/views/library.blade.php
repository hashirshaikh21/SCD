@extends('layouts/master')
@section('content')
<div class="content active" id="library">
    <h2>All Shows</h2>
    <div id="libItems">    
        <div class="row">
            <div class="col-lg-12">
                <div style="display: flex; margin-left: 170px;">
                    <div class="anime-item">
                        <img src="{{ asset('/aot.webp') }}" alt="Attack on Titan">
                        <h3>Attack on Titan</h3>
                        <button class="watchlist-button" onclick="addToWatchlist('Attack on Titan','aot.webp')">Add to Watchlist</button>
                    </div>
                    <div class="anime-item">
                        <img src="{{ asset('/bleach.jpg') }}" alt="Bleach">
                        <h3>Bleach</h3>
                        <button class="watchlist-button" onclick="addToWatchlist('Bleach','bleach.jpg')">Add to Watchlist</button>
                    </div>
                    <div class="anime-item">
                        <img src="{{ asset('/rezero.jpg') }}" alt="Re:Zero">
                        <h3>Re:Zero</h3>
                        <button class="watchlist-button" onclick="addToWatchlist('Re:Zero','rezero.jpg')">Add to Watchlist</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
            <div style="display: flex;">

                <div class="anime-item"  style="display: flex; margin-left: 170px;">
                    <img src="{{ asset('/mha.jpg') }}" alt="My Hero Academia">
                    <h3>My Hero Academia</h3>
                    <button class="watchlist-button" onclick="addToWatchlist('My Hero Academia','mha.jpg')">Add to Watchlist</button>
                </div>
                <div class="anime-item">
                    <img src="{{ asset('/demon.jpg') }}" alt="Demon Slayer">
                    <h3>Demon Slayer</h3>
                    <button class="watchlist-button" onclick="addToWatchlist('Demon Slayer','demon.jpg')">Add to Watchlist</button>
                </div>
                <div class="anime-item">
                    <img src="{{ asset('/onepiece.jpg') }}" alt="One Piece">
                    <h3>One Piece</h3>
                    <button class="watchlist-button" onclick="addToWatchlist('One Piece','onepiece.jpg')">Add to Watchlist</button>
                </div>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
            <div style="display: flex; margin-left: 150px;">

                <div class="anime-item">
                    <img src="{{ asset('/naruto.jpg') }}" alt="Naruto">
                    <h3>Naruto</h3>
                    <button class="watchlist-button" onclick="addToWatchlist('Naruto','naruto.jpg')">Add to Watchlist</button>
                </div>
                <div class="anime-item">
                    <img src="{{ asset('/jjk.jpg') }}" alt="Jujutsu Kaisen">
                    <h3>Jujutsu Kaisen</h3>
                    <button class="watchlist-button" onclick="addToWatchlist('Jujutsu Kaisen','jjk.jpg')">Add to Watchlist</button>
                </div>
                <div class="anime-item">
                    <img src="{{ asset('/deathnote.jpg') }}" alt="Deathnote">
                    <h3>Deathnote</h3>
                    <button class="watchlist-button" onclick="addToWatchlist('Deathnote','deathnote.jpg')">Add to Watchlist</button>
                </div>
            </div>
            </div>
        </div>    
            <div class="row">
                <div class="col-lg-12">
                <div style="display: flex;">
                    <div class="anime-item"  style="display: flex; margin-left: 170px;">
                        <img src="{{ asset('/tail.jpg') }}" alt="Fairy Tail">
                        <h3>Fairy Tail</h3>
                        <button class="watchlist-button" onclick="addToWatchlist('Fairy Tail','tail.jpg')">Add to Watchlist</button>
                    </div>
                    <div class="anime-item">
                        <img src="{{ asset('/alch.jpg') }}" alt="Fullmetal Alchemist">
                        <h3>Fullmetal Alchemist: Brotherhood</h3>
                        <button class="watchlist-button" onclick="addToWatchlist('Fullmetal Alchemist: Brotherhood','alch.jpg')">Add to Watchlist</button>
                    </div>
                    <div class="anime-item">
                        <img src="{{ asset('/zero.jpg') }}" alt="Fate/Zero">
                        <h3>Fate/Zero</h3>
                        <button class="watchlist-button" onclick="addToWatchlist('Fate/Zero','zero.jpg')">Add to Watchlist</button>
                    </div>
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="anime-item"  style="display: flex; margin-left: 170px;">
                        <img src="{{ asset('/opm.jpg') }}" alt="One Punch Man">
                        <h3>One Punch Man</h3>
                        <button class="watchlist-button" onclick="addToWatchlist('One Punch Man','opm.jpg')">Add to Watchlist</button>
                    </div>
                </div>
            </div>
    </div>
    @include('layouts.feedback')
    @include('layouts.footer')

</div>

    @endsection