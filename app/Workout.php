<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
  protected $fillable = [
      'name_day','workout_details',
  ];
}
