<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lineup extends Model
{
    protected $table='lineup';
    protected $primaryKey = 'lineup_id';
    public $timestamps = false;
}
