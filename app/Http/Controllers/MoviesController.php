<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MoviesController extends Controller
{

    public function index() {

        $movies = Movie::all();

        return view('movies.index', compact('movies'));
    }

    public function show($id) {

        $movie = Movie::all()->find($id);

        return view('movies.show', compact('movie'));
    }

    public function create() {

        return view('movies.create');

    }

    public function store () {

        $this->validate(request(), [
            'title' => 'required|min:2',
            'genre' => 'required|min:2',
            'year' => 'required|numeric|min:1900|max:2017',
            'director' => 'required|min:2',
            'storyline' => 'required|min:15'
        ]);

        $movie = Movie::create([
            'title' => request('title'),
            'genre' => request('genre'),
            'year' => request('year'),
            'director' => request('director'),
            'storyline' => request('storyline')
        ]);

        return redirect('/');

    }

    public function genre ($genre) {

        $moviesByGenre = Movie::where('genre', ucfirst(trans($genre)))->get();

        return view('movies.genre', compact('moviesByGenre'));

    }
}
