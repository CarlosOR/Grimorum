<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Espacio;
use App\tiempo_espacio;
use App\tp_espacio_espacio;
use App\Login;
class EspacioController extends Controller
{
    public function Create(Request $request){
        $login = Login::first();
        return $request;
        $espacio = new Espacio;
        $espacio = $request->Nombre;
        $espacio = $request->Tamano; 
        $espacio = $login->ID;
        return $espacio;
    }
}
