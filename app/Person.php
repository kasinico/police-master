<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
  protected $fillable = [
      'names','id_type','id_number',
  ];
}
