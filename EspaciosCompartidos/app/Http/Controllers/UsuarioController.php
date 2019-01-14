<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Login;
class UsuarioController extends Controller
{

    public function Create(Request $request){
        $user =  Usuario::where( 'id_usuario', $request->Id_Usuario)->first();
        echo "<script>console.log( 'Debug Objects: " . $user . "' );</script>";
        if($user){
            return view('yields.sigin', [ 'msError' => "El usuario ya se encuentra registrado" ]);
        }
            $sigin = true;
            $error = false;
            $msError = "";
            Usuario::Create($request->all());
            return view('yields.login', ['sigin' => true, 'error' => false, 'msError' => ""]);
        
    }


}
