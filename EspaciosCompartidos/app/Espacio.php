<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Espacio extends Model
{
    protected $table ='espacio';
    protected $fillable = ['Id_Espacio', 'Id_Usuario', 'Nombre', 'Tamano'];
    public $timestamps = false;
    
    public $Id_Espacio = "";
    public $Id_Usuario = "";
    public $Nombre ="";
    public $Tamano = "";
    
}
