<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);  // Other options: hasOne, hasMany, belongsTo, belongsToMany, morphMany, morphToMany
    }
}
