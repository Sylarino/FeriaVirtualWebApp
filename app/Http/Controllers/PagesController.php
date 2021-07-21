<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
        public function regisUsu(){
        $usuario = App\usuarios::all();
        return view('registroUsuario', compact('usuario'));
    }

    public function crear(Request $request){
        // return $request->all();
        
        $usuarioNuevo = new App\usuarios();
        $usuarioNuevo->user = $request->user;
        $usuarioNuevo->run = $request->run;
        $usuarioNuevo->nombre = $request->nombre;
        $usuarioNuevo->nombre2 = $request->nombre2;
        $usuarioNuevo->apellido = $request->apellido;
        $usuarioNuevo->apellido2 = $request->apellido2;
        $usuarioNuevo->genero = $request->genero;
        $usuarioNuevo->pais = $request->pais;
        $usuarioNuevo->fechaNac = $request->fechaNac;
        $usuarioNuevo->telefono = $request->telefono;
        $usuarioNuevo->direccion = $request->direccion;
        $usuarioNuevo->email = $request->email;
        $usuarioNuevo->password = $request->password;

        $usuarioNuevo->save();

        return back()->with('mensaje', 'Usuario registrado exitosamente!');

    }
}
