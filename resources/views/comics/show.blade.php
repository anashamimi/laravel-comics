@extends('layouts.app')

@section('content')
    <div class="ah-jumbotron">

    </div>
    <div class="ah-cover p-3 bg-primary w-100">
        <div class="container">
            <img class="img-fluid" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
        </div>
    </div>

    <div class="bg-white">
        <div class="container">

            <div class=" d-flex justify-content-between align-content-center py-5">
                <div>
                    <div class="py-4">
                        <h1 class="text-primary">{{ $comic['title'] }}</h1>
                    </div>

                    <div>
                        <div class=" bg-success p-3 d-inline-block">
                            <p class="text-white">Price: {{ $comic['price'] }}</p>
                        </div>

                        <p class=" text-dark py-4">{{ $comic['description'] }}</p>
                    </div>
                </div>

                <div class="img-comic">
                    <img class="img-fluid" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                </div>

            </div>

        </div>
    </div>

    <div class=" bg-light text-dark">
        <div class="container">
            <div class=" d-flex">
                <div>
                    <h2>Talent</h2>
                    <div>

                    </div>
                </div>

                <div>
                    <h2>Specs</h2>
                </div>

            </div>
        </div>

    </div>
@endsection
