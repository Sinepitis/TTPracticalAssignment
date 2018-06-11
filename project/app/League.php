<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    protected $table='league';

    public $timestamps = false;
    public function tournament(){
      return $this->belongsTo('App\Tournament');
    }
    public function teams(){
      return $this->hasMany('App\Team');
    }
    public function game(){
      return $this->hasMany('App\Games');
    }
}
