<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    public function students()
    {
        return $this->hasMany(Students::class, 'id_kelas');
    }
}
