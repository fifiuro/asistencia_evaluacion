<?php

namespace App\configuracion;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = 'depatamentos';
    protected $primaryKey = 'id_dep';
    protected $timestamps = true;
}
