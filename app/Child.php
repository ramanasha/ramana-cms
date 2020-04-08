<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
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
        return $this->belongsToMany(Subject::class, 'child_subjects');
    }
}
