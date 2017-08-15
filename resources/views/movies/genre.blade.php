@extends('layouts.master')

@section('content')

    <h4>Movies by genre: {{ $moviesByGenre->first()->genre }}</h4>

    @foreach ($moviesByGenre as $movie)

        <div class="blog-post">
            <h2 class="blog-post-title"><a href="/movies/{{ $movie->id }}">{{ $movie->title }}</a></h2>
            <p class="blog-post-meta">
                {{ $movie->created_at->toFormattedDateString() }}, {{ $movie->genre }}
            </p>

            <p>{{ \Illuminate\Support\Str::words($movie->storyline, 30, ' ...') }}</p>

        </div>

    @endforeach

    <div class="form-group">
        <a href="/">Back to Homepage</a>
    </div>

@endsection
