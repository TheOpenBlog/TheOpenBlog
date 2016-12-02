<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Count extends Model
{
    protected $table ='flags';
    public function Post(){
        return $this->belongsTo('App\Post');
    }
    
}
