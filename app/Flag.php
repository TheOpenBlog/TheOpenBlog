<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flag extends Model
{
    protected $table ='flagged_posts';
    public function Post(){
        return $this->belongsTo('App\Post');
    }
    public function User(){
        return $this->belongsTo('App\User');
    }
}
