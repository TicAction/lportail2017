<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{



   public function profils()
   {

       return $this->belongsToMany(Profil::class);
   }
   public function students()
   {
       return $this->belongsToMany(Student::class);
   }
}
