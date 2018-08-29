<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable=[
        'name'
    ];
    public function blogs(){
        return $this->morphedByMany('App\Blog','taggable');
    }

    public function questions(){
        return $this->morphedByMany('App\Question','taggable');
    }
}
