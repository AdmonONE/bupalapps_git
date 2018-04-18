<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registrar extends Model
{
    //
    protected $fillable = ['Registro', 'Codigo', 'Area', 'Programa', 'Actividad', 'Detalle', 'Evento_Especial', 'SUE', 'CIE_10', 'Profesional_Tratante'];
}
