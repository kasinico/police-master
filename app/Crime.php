<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crime extends Model
{
  protected $fillable = [
    'crime_type',
    'date',
    'location',
    'whatHappened',
    'reportedBy',
    'created_at',
    'updated_at',
  ];
}
