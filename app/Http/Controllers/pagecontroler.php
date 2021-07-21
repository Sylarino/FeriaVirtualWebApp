<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;
class pagecontroler extends Controller
{
    //


    public function registrocamion(){
        $transportes = App\transportes::all();
        return view('registrocamion',compact('transportes'));
     
    }

    public function crear(Request $request){
        $this -> validate ($request,[
            'patente'=> 'required|unique:transportes'
        ]);
        $transpNuevo = new App\transportes();
        $transpNuevo->marca = $request->marca;
        $transpNuevo->modelo = $request->modelo;
        $transpNuevo->patente = $request->patente;
        $transpNuevo->carga= $request->carga;
        $transpNuevo->valor = $request->valor;
    
        $transpNuevo->save();
    
        return back()->with('mensaje', 'Usuario registrado exitosamente!');
    
    }
    
// productor
    public function regismensa(){
        $mensaje = App\Mensajes::all();
        return view('contacto', compact('mensaje'));
    }
    
    public function creado (Request $request){
        // return $request->all();
        
        $mensajeNuevo =new App\Mensajes();
        $mensajeNuevo->nombre = $request->nombre;
        $mensajeNuevo->email = $request->email;
        $mensajeNuevo->telefono = $request->telefono;
        $mensajeNuevo->mensaje = $request->mensaje;
        
        $mensajeNuevo->save();
    
        return back()->with('mensaje', ' registrado exitosamente!');
    
    }

    // productor
    public function regisproductor(){
        $productor = App\combofruta::all();
        return view('clienteInterno', compact('productor'));
    }
    
    public function creacion (Request $request){
        // return $request->all();
        
        $mensajeproduc =new App\combofruta();
        $mensajeproduc->nombre = $request->nombre;
        $mensajeproduc->descripcion = $request->descripcion;
        $mensajeproduc->precio = $request->precio;
        $mensajeproduc->activo = 1;
        
        $mensajeproduc->save();
    
        return back()->with('mensaje', ' registrado exitosamente!');
    
    }

    
}
  









    




