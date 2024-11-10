@extends('layouts/master')
@section('content')
<div class="content active" id="watchlist">
    <h2>Your Watchlist</h2>
    <!-- <div id="watchlistItems">
        <p>Your watchlist is empty. Add shows from the Library.</p>

    </div> -->
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
    @include('layouts.feedback')
@include('layouts.footer')
</div>

@endsection