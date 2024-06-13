<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acquire extends Model
{
    use HasFactory;

    public function Profile(){
        return $this->belongsTo('App\Models\Profile');
    }

    public function job_applications(){
        return $this->belongsTo('App\Models\Job_application');
    }

    public function job_offerts(){
        return $this->belongsTo('App\Models\Job_offer');
    }
}
