<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class department extends Model
{
   protected $fillable= ['title'];

   public function student()
   {
      return $this->hasMany('App\Student');
   }
}
