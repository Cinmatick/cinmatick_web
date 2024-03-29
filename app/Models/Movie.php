<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    //protected $fillable =['name','video_url ','cast', 'status', 'released_date', 'description', 'pg', ];
    protected $guarded = ['id'];
    //relationship wit shows
    public function show(){
        return $this->hasMany(Shows::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
