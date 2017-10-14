<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schoolboard extends Model
{

    protected $fillable =['schoolboard_name','schoolboard_adress','schoolboard_email','schoolboard_phone'];

    protected $dates =['created_at','updated_at'];


    public function schools()
    {
        return $this->hasMany(School::class);
    }
}
