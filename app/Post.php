<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Conner\Likeable\LikeableTrait;
class Post extends Model
{
use LikeableTrait;

    public function User(){
        return $this->belongsTo('App\User');
    }
    public function Flag(){
        return $this->hasMany('App\Flag');
    }
    public function comments()
    {
      return $this->hasMany('App\comment');
    }
}
