<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ratio extends Model
{
  public $timestamps = false;
  protected $fillabe = [
    'currency_from',
    'currency_to',
    'ratio'
  ];

  // public function currencies()
  // {
  //     return $this->belongsToMany('App\Currency');
  // }


}
