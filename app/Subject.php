<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public function children()
    {
        return $this->belongsToMany(Child::class, 'child_subjects');
    }
}
