@extends('layouts.master')

@section('content')

    <div class="blog-post">
        <h2 class="blog-post-title">{{ $movie->title }}</h2>
        <p class="blog-post-meta">
            {{ $movie->created_at->toFormattedDateString() }},
            <a href="/movies/{{ strtolower($movie->genre) }}">{{ $movie->genre }}</a>
        </p>
        <p class="blog-post-meta">Directed by {{ $movie->director }}</p>
        <p class="blog-post-meta">Year: {{ $movie->year }}</p>

        <p>{{ $movie->storyline }}</p>

    </div><!-- /.blog-post -->

    <h4>Comments:</h4>

    <div class="form-group">
        @if(count($movie->comments) > 0)

            @foreach ($movie->comments as $comment)
                <li class="blog-post-meta"><strong>{{ $comment->created_at->diffForHumans() }} </strong>{{ $comment->body }}</li>
            @endforeach

        @else

            <p class="blog-post-meta"><i>There is no comments on this movie! Be first to comment!</i></p>

        @endif

    </div>

    <h4 class="form-group">Create a comment:</h4>

    <form method="POST" action="/movies/{{ $movie->id }}/comments">
        {{ csrf_field() }}

        <div class="form-group">
            <label>Enter comment text here</label>
            <textarea type="text" class="form-control" id="body" name="body"></textarea>
        </div>
        <button type="submit" class="btn btn-default form-group">Submit</button>
    </form>

    @include('partials.errors')

    <div class="form-group">
        <a href="/">Back to Homepage</a>
    </div>

@endsection
