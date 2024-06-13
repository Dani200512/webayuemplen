<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;


     //Relacion Uno a Muchos (Inversa) con User
     public function Profile(){
        return $this->belongsTo('App\Models\Profile');
    }


    public function comments(){
        return $this->hasMany('App\Models\Comment');
    }

    public function reactions(){
        return $this->hasMany('App\Models\Reaction');
    }

    public function job_applications(){
        return $this->hasMany('App\Models\Job_application');
    }

    public function job_offerts(){
        return $this->hasMany('App\Models\Job_offer');
    }

    public function multimedias(){
        return $this->hasMany('App\Models\Multimedia');
    }
}
