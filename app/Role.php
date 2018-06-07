<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class Role extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

}