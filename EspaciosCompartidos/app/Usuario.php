<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';
    protected $fillable = ['Id_Usuario', 'Nombre', 'Apellido', 'Telefono', 'Password'];
    public $timestamps = false;

        public $Id_Usuario = 0;
        public $Nombre = "";
        public $Apellido = "";
        public $Telefono = "";
        public $Password = "";
}
