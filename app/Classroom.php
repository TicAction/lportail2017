<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $fillable =['classroom_name'];

    protected $dates =['created_at','updated_at'];

    public function schools()
    {
        return $this->belongsToMany(School::class);
    }
}
