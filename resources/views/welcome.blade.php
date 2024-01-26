@extends('layouts.app')
@section('main')
    <section>
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

        </div>
    </section>
@endsection
