<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;
    
    public function profile()
    {
        return $this->belongsTo('App\Models\Profile');
    }

}
