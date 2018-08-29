<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable=[
        'name',
        'display_name'
    ];

    public function user(){
        return $this->belongsToMany('App\User','roles_user')->withTimestamps();
    }

}
