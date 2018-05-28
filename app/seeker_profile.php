<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class seeker_profile extends Model
{
    public function Seeker_Skill_Set(){
        return $this->hasMany("App/Seeker_Skill_Set");
    }
}
