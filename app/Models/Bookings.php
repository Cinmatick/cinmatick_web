<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    use HasFactory;

    //relationship to user
    public function user(){
        return $this->belongsTo(User::class, 'users_id');
    }
    //relationship to shows
    public function show(){
        return $this->belongsTo(Shows::class, 'shows_id');
    }
}
