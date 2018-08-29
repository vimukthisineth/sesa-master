<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','student_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','student_id',
    ];

    public function is_validated_user(){
        return $this->is_confirmed;
    }



    public function blogs(){
        return $this->hasMany('App\Blog');
    }



    public function comments(){
        return $this->hasMany('App\Comments');
    }

    public function question(){
        return $this->hasMany('App\Question');
    }

    public function roles(){
        return $this->belongsToMany('App\Role','roles_user')->withTimestamps();
    }

    public function events(){
        return $this->hasMany('App\Event');
    }
}
