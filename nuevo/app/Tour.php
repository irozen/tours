<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    //
    protected $fillable = [
      'name', 'description','price','categorias_id','photo','duration'
    ]
}
