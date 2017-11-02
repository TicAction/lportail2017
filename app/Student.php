<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Student
 * @package App
 */
class Student extends Model
{
    /**
     * @var array
     */
    protected $fillable =['firstname','lastname','group_id','birthday','code'];
    /**
     * @var array
     */
    protected $dates =['birthday','created_at','updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
   {
     return $this->belongsToMany(User::class);
   }

    /**
     * @return string
     */
    public function getFullnameAttribute()
   {
      return $this->firstname." ".$this->lastname;
   }

    /**
     * @return mixed
     */
    public function getAgeAttribute()
   {
        return $this->birthday->diffInYears();
   }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function profil()
    {
        return $this->hasOne(Profil::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function services()
    {
        return $this->belongsToMany(Service::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function academies()
    {
        return $this->belongsToMany(Academy::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function specials()
    {
        return $this->belongsToMany(Special::class);
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function getServiceListAttribute()
    {
        return $this->services()->pluck('id');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function getAcademyListAttribute()
    {
        return $this->academies()->pluck('id');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function getSpecialListAttribute()
    {
        return $this->specials()->pluck('id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function behaviors()
    {
        return $this->belongsToMany(Behavior::class);
    }

    /**
     * @param $firstname
     * @return string
     */
    public function setFirstnameAttribute($firstname)
    {
        return $this->attributes['firstname'] = ucfirst($firstname);
    }

    /**
     * @param $lastname
     * @return string
     */
    public function setLastnameAttribute($lastname)
    {
        return $this->attributes['lastname'] = ucfirst($lastname);
    }

}
