<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theatre extends Model
{
    use HasFactory;

    //relationship with shows
    public function show(){
        return $this->hasMany(Shows::class, );
    }
}
