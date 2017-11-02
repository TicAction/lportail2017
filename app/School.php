<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable =['school_name','school_adress','school_email','school_phone','schoolboard_id'];

    protected $dates =['created_at','updated_at'];


    public function schoolboard()
    {
        return $this->belongsTo(Schoolboard::class);
    }

    public function classrooms()
    {
        return $this->belongsToMany(Classroom::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);

    }
}
