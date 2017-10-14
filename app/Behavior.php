<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Behavior extends Model
{
    protected $fillable =['observation_content','observation_date'];
    protected $dates=['observation_date','created_at','updated_at'];

    public function students()
    {
        return $this->belongsToMany(Student::class);
    }


    /**
     * @return \Illuminate\Support\Collection
     */
    public function getStudentListAttribute()
    {
        return $this->students()->pluck('id');
    }
}
