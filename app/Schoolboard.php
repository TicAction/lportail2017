<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schoolboard extends Model
{

    protected $fillable =[
        'schoolboard_name',
        'schoolboard_adress',
        'schoolboard_city',
        'schoolboard_email',
        'schoolboard_phone',
        'schoolboard_region',
        'schoolboard_url'
    ];




    public function schools()
    {
        return $this->hasMany(School::class);
    }
}
