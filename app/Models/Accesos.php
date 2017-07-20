<?php

namespace SCAs\Models;

use Illuminate\Database\Eloquent\Model;


class Accesos extends Model
{
    protected $table = "accesos";
    protected $primaryKey ="id";
    protected $fillable = ['ip','descripcion','fecha_de_ingreso','email'];
}
