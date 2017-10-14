<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Academy extends Model
{
    public function students()
    {
        return $this->belongsToMany(Student::class);
    }
}
