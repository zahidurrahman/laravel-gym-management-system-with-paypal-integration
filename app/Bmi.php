<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bmi extends Model
{
  protected $fillable = [
      'weight','height','bmi',
  ];
}
