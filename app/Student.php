<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $fillable=[
        'first_name','last_name','user_id','grade_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'student_subjects');
    }
}

