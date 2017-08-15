@extends('layouts.master')

@section('content')

    <h2>Add movie</h2>

    <form method="POST" action="/movies">
        {{ csrf_field() }}

        <div class="form-group">
            <label>Enter movie title</label>
            <input type="text" value="{{ old('title') }}" class="form-control" id="title" name="title">
        </div>

        <div class="form-group">
            <label>Enter genre</label>
            <input type="text" value="{{ old('genre') }}" class="form-control" id="genre" name="genre">
        </div>

        <div class="form-group">
            <label>Enter year when movie was made</label>
            <input type="number" value="{{ old('year') }}" class="form-control" id="year" name="year">
        </div>

        <div class="form-group">
            <label>Enter director name</label>
            <input type="text" value="{{ old('director') }}" class="form-control" id="director" name="director">
        </div>

        <div class="form-group">
            <label>Enter movie storyline here</label>
            <textarea type="text" class="form-control" id="storyline" name="storyline">{{ old('storyline') }}</textarea>
        </div>

        <button type="submit" class="btn btn-default form-group">Submit</button>
    </form>

    @include('partials.errors')

@endsection
