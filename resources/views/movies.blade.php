@extends('layout.base')

@section('contents')
    <h2>I nostri film:</h2>

    <div class="row g-3 row-cols-3">
        @foreach ($arrMovies as $movie)
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                    <h3 class="card-title">{{ $movie->title }}</h3>
                    <h4 class="card-title">{{ $movie->original_title }}</h4>
                    <h5 class="card-title">{{ $movie->nationality }}</h5>
                    <div class="card-text">{{ $movie->date }}</div>
                    <div class="card-text">{{ $movie->vote }}</div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection