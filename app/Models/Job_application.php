<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job_application extends Model
{
    use HasFactory;

    public function profile()
    {
        return $this->belongsTo('App\Models\Profile');
    }

    public function publication(){
        return $this->belongsTo('App\Models\Publication');
    }

    public function acquires(){
        return $this->hasMany('App\Models\Acquire');
    }
}
