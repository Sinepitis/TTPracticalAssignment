<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $table='participant';
    protected $primaryKey = 'participant_id';
    public $timestamps = false;
}
