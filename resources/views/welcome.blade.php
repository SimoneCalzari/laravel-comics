@extends('layouts.app')
@section('main')
    <section id="main-content">
        <div class="my-container">
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
    <section id="icons-list">
        <div class="my-container">
            <ul class="d-flex ">
                <li class="d-flex">
                    <div class="img-box">
                        <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}"
                            :alt="merch.text" />
                    </div>
                    <a href="/" class="text-uppercase">Digital comics</a>
                </li>
                <li class="d-flex">
                    <div class="img-box">
                        <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" :alt="" />
                    </div>
                    <a href="/" class="text-uppercase">Dc merchandise</a>
                </li>
                <li class="d-flex">
                    <div class="img-box">
                        <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" :alt="" />
                    </div>
                    <a href="/" class="text-uppercase">Subscription</a>
                </li>
                <li class="d-flex">
                    <div class="img-box">
                        <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" :alt="" />
                    </div>
                    <a href="/" class="text-uppercase">Comic shop locator</a>
                </li>
                <li class="d-flex">
                    <div class="img-box">
                        <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" :alt="" />
                    </div>
                    <a href="/" class="text-uppercase">Dc power visa</a>
                </li>
            </ul>
        </div>
    </section>
@endsection
