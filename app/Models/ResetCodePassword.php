<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResetCodePassword extends Model
{
    use HasFactory;

    protected $casts = ['expires_at' => 'date'];

    protected $fillable = [
        'user_id',
        'code',
        'expires_at'
    ];

    public function showIsExpire()
    {
        echo now();
        echo "<br>";
        echo now()->addHour();
        echo "<br>";
        echo $this->created_at;
        echo "<br>";
        echo $this->created_at->addHour();
    }

    /**
     * check if the code is expire then delete
     *
     * @return void
     */
    public function isExpire()
    {
        if(now() > $this->expires_at) return false;

        $this->delete();
        return true;
    }
}
