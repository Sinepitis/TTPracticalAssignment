<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    protected $table='tournament';
    public function games(){
      return $this->belongsTo('App\Games');
    }
}
