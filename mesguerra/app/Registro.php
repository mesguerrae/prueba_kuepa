<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    protected $table = 'registro';
    
    protected $fillable = ['nombre', 'apellidos', 'email', 'telefono', 'programa', 'contactado'];
}
