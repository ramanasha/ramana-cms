<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    

    public function children()
    {
        return $this->hasMany(Child::class);
    }
}
