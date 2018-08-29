<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable=[
        'title','body','user_id'
    ];

    public function commentable(){
        return $this->morphTo();
    }

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }

    public function replies(){
        return $this->morphMany('App\Reply','repliable');
    }
}
