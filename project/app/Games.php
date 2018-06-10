<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
    protected $table='games';

    public function team(){
      return $this->hasMany('App\Team');
    }
    public function comment(){
      return $this->belongsTo('App\Comment');
    }
}
