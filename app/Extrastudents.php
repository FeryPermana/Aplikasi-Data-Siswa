<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Extrastudents extends Model
{
    public function students()
    {
        return $this->belongsTo(Students::class, 'id_students', 'id');
    }
    public function extra()
    {
        return $this->belongsTo(Extras::class, 'id_extra', 'id');
    }
}
