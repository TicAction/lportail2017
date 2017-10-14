<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeacherProfil extends Model
{

    public function users()
    {
        $this->belongsTo(User::class);
    }

}
