<?php

namespace App\configuracion;

use Illuminate\Database\Eloquent\Model;

class departamento extends Model
{
    protected $table = 'depatamentos';
    protected $primaryKey = 'id_dep';
    protected $timestamps = true;
}
