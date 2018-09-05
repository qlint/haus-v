<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //we tell the model which table to use
    protected $table = 'categories';

    //we define the relationships ie one category will have many "items"
    //aka one to many relationship

    //I'll call my function "items"
    public function items(){
      //we're connecting it to the newitem model
      return $this->hasMany('App\Newitem');
    }
}
