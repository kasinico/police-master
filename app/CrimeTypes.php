<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CrimeTypes extends Model
{
  protected $fillable = [
      'name',
    'crimeType',
    'image',
    'occupation',
    'contact',
    'address',
    'gender',

    'DateTime',
    'message',
    'license',
    'make',
    'model',
    'insurance',
    'engine',
    'chasis',
    'engine_size',
    'transimission',
    'fuel',
    'deleted',

  ];
}
