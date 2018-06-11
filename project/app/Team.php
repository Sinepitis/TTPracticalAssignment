<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table='team';
    public $timestamps = false;
    public function games(){
      return $this->belongsTo('App\Games');
    }
    public function participant(){
      return $this->belongsTo('App\Participant');
    }
    public function sub(){
      return $this->belongsTo('App\Sub');
    }
    public function lineup(){
      return $this->belongsTo('App\Lineup');
    }
    public function league(){
      return $this->belongsTo('App\League');
    }
}
