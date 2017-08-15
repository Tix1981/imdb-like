<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Movie extends Model
{
    protected $fillable = ['title', 'storyline', 'genre', 'director', 'year'];
    
    public static function sidebar () {

        return self::orderBy('created_at', 'desc')->limit(5)->get();

    }

    public function comments() {

        return $this->hasMany(Comment::class);

    }

    public function addComment ($body) {

        $this->comments()->create(['body'=>$body]);

    }
}
