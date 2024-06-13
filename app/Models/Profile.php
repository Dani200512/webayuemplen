<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    public function user(){
        return $this->hasOne('App\Models\User');

    }

    public function publications(){
        return $this->hasMany('App\Models\Publication');
    }

    public function messages(){
        return $this->hasMany('App\Models\Message');
    }

    public function skills(){
        return $this->hasMany('App\Models\Skill');
    }

    public function job_applications(){
        return $this->hasMany('App\Models\Job_application');
    }

    public function job_offerts(){
        return $this->hasMany('App\Models\Job_offer');
    }

    public function notifications(){
        return $this->hasMany('App\Models\Notification');
    }

    public function acquires(){
        return $this->hasMany('App\Models\Acquire');
    }

    public function friendships()
    {
        return $this->belongsToMany('App\Models\Profile', 'frienships', 'id_profile1', 'id_profile2')
            ->withPivot('state')
            ->withTimestamps();
    }

    public function friendshipsof()
    {
        return $this->belongsToMany('App\Models\Profile', 'frienships', 'id_profile2', 'id_profile1') // Cambiar el orden de id_profile1 e id_profile2
            ->withPivot('state')
            ->withTimestamps();
    }


}
