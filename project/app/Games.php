<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
    protected $table='games';
    protected $primaryKey = 'game_id';
    public $timestamps = false;
    public function team(){
      return $this->hasMany('App\Team');
    }
    public function comment(){
      return $this->belongsTo('App\Comment');
    }
}
