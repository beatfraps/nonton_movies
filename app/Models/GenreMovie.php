<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GenreMovie extends Model
{
    use HasFactory;

    protected $table = 'genre_movies';

    public $fillable = [
        'genre_id',
        'movie_id',
        'created_at',
        'updated_at'
    ];

    public function genre()
    {
        return $this->belongsTo('App\Models\Genre','genre_id','id');
    }

    public function movie()
    {
        return $this->belongsTo('App\Models\Movie');
    }
}
