<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{


    protected $fillable=[
        'body',
        'repliable_id',
        'repliable_type',
        'user_id'
    ];

    public function repliable(){
        return $this->morphTo();
    }

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
}
