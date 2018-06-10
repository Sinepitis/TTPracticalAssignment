<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table='comment';
      return $this->hasMany('App\Games');
      return $this->hasMany('App\User');
}
