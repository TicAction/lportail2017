<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{

    /**
     * @var array
     */
    protected $fillable =['service','other','academic','student_id'];
    /**
     * @var array
     */
    protected $date =['created_at','updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function student()
   {
       return $this->belongsTo(Student::class);
   }

   public function services()
   {
       return $this->belongsToMany(Profil::class);
   }
}
