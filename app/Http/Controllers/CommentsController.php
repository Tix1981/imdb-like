<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class CommentsController extends Controller
{
    public function store ($id) {

        $this->validate(request(), [
            'body' => 'required|min:2'
        ]);

        $movie = Movie::find($id);
        $movie->addComment(request('body'));

        return back();

    }

}
