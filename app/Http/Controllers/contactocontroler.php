<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App;

class contactocontroler extends Controller
{
    public function regismensa(){
    $mensaje = App\Mensajes::all();
    return view('contacto', compact('mensaje'));
}

public function crear (Request $request){
    // return $request->all();
    
    $mensajeNuevo =new App\Mensajes();
    $mensajeNuevo->nombre = $request->nombre;
    $mensajeNuevo->email = $request->email;
    $mensajeNuevo->telefono = $request->telefono;
    $mensajeNuevo->mensaje = $request->mensaje;
    
    $mensajeNuevo->save();

    return back()->with('mensaje', ' registrado exitosamente!');

}
}
