<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shows extends Model
{
    use HasFactory;

    //relationship wit bookings
    public function bookings(){
        return $this->hasMany(Bookings::class, 'shows_id');
    }

    //relationship to movie
    public function movie(){
        return $this->belongsTo(Movie::class, 'movie_id');
    }
    //relationship to theatre
    public function theatre(){
        return $this->belongsTo(Theatre::class, 'theatre_id');
    }
}
