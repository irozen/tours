<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    //
    protected $fillable = [
      'user_id','tour_id','date','resNum','pickUp','dropOff','guide'  
    ]
}
