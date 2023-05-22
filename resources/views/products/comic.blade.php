@extends('layouts.app')

@section('content')
    <div class="ah-jumbotron">

    </div>
    <div class="ah-cover p-3 bg-primary w-100">
        <div class="container">
            <img class="img-fluid" src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
        </div>
    </div>

    <div class="container">

            <div>

                <div>
                    <h1 class="text-primary">{{ $comic['title'] }}</h1>
                </div>

            </div>

        </div>
@endsection
