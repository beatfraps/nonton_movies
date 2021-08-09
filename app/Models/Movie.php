<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $table = 'movies';

    public $fillable = [
        'code',
        'name',
        'year',
        'details',
        'created_at',
        'updated_at'
    ];

    public function genres()
    {
        return $this->hasMany('App\Models\GenreMovie');
    }
}
