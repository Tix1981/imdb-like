@extends('layouts.master')

@section('content')

    @foreach ($movies as $movie)

        <div class="blog-post">
            <h2 class="blog-post-title"><a href="/movies/{{ $movie->id }}">{{ $movie->title }}</a></h2>
            <p class="blog-post-meta">
                {{ $movie->created_at->toFormattedDateString() }},
                <a href="/movies/{{ strtolower($movie->genre) }}">{{ $movie->genre }}</a>
            </p>

            <p>{{ \Illuminate\Support\Str::words($movie->storyline, 30, ' ...') }}</p>

        </div><!-- /.blog-post -->

    @endforeach

    <div class="form-group">
        <a href="movies/create">Add movie to database</a>
    </div>

@endsection
