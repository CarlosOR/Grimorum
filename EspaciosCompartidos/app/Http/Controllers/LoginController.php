<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login;
use App\Usuario;
class LoginController extends Controller
{

    public function Login(Request $request){
        $usuario = Usuario::where( 'id_usuario', $request->id_usuario )->first();
        if($request->pass == $usuario->PASSWORD){
            $login = Login::first();
            if($login){
                $login->id = $usuario->ID_USUARIO;
                $login->Nombre = $usuario->NOMBRE;
            }else{
                $login = new Login;
                $login->id = $usuario->ID_USUARIO;
                $login->Nombre = $usuario->NOMBRE;
                $login->save();
            }
            return view('yields.home', ['loged' => true, 'user'=> $usuario->NOMBRE ]);
        }
        
        return view('yields.login', [
            'sigin' => false,
            'error' => true,
            'msError' => "Usuario o contraseña incorrectos."
        ]);
    }

    public function usuarioLoged(){
        $login = Login::first();
        $loged = false;
        $user = "";
        if($login != null){
            $loged = true;
            $user = $login->NOMBRE;
        }
        return view('yields.home', [ 'loged' => true, 'user' => $user]);
    }

    public function LogOut(){
        $currentUser =  Login::first();
        Login::where('ID', $currentUser->ID)->delete();
        return view('yields.home', [ 'loged' => false, 'user' => ""]);
    }

    
}
