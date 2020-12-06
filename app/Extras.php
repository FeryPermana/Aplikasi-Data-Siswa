<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Extras extends Model
{
    public function Extrastudents()
    {
        return $this->hasMany(Extrastudents::class, 'id_extra');
    }
}
