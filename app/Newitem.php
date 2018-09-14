<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newitem extends Model
{
  //I'll call my function "category" because it belongs to one category
  public function category(){
    //note that 'belongsTo' assigns it to that model, in this case - category 
    return $this->belongsTo('App\Category');
  }
}
