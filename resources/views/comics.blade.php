@extends('layouts.app')
@section('style')
    @vite('resources/js/comics.js')
@endsection
@section('main')
    <!-- COMICS MAIN SECTION -->
    <section id="main-content">
        <div class="container">
            <h2 class="text-uppercase">Current series</h2>
            <div class="cards d-flex">
                @foreach ($comics as $comic)
                    <div class="my-card">
                        <div class="img-box">
                            <img src="{{ $comic['thumb'] }}" alt="" class="img-fluid">
                        </div>
                        <h4 class="text-uppercase">{{ $comic['series'] }}</h4>
                    </div>
                @endforeach
            </div>
            <div class="row-btn">
                <button class="text-uppercase">Load more</button>
            </div>
        </div>
    </section>
    <!-- /COMICS MAIN SECTION -->
@endsection
