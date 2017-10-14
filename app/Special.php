<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Special extends Model
{
    public function students()
    {
        return $this->belongsToMany(Student::class);
    }
}
