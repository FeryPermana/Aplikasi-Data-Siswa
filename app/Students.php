<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas', 'id');
    }
    public function Extrastudents()
    {
        return $this->hasMany(Extrastudents::class, 'id_students');
    }
}
