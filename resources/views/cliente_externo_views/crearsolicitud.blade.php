@extends('layouts.master')
<!DOCTYPE html>
<html lang="en">
    <body>
        <!--Formulario de Solicitud-->
        @section('content')
        <div class="div-solicitud">
            <form action="{{ route('solicitud.crear') }}" class="form-solicitud" method="POST">
                {{ csrf_field() }}
                <h1>CREAR SOLICITUD DE VENTA</h1>
                <label for="nombre">Nombre</label>
                <label for="apellido">Apellido</label>

                <h2>Agregue productos</h2>

                <h3>Seleccione producto y cantidad</h3>

                @foreach ($errors->get('fruta') as $error)
                <div class="error"><b>Seleccione una Fruta</b></div>
                @endforeach
                
                @foreach ($errors->get('cantidad') as $error)
                <div class="error"><b>Ingrese cantidad correcta de frutas</b></div>
                @endforeach

                <div id="divsito">
                    <select name="fruta" id="frutas" class="select-css">
                        <option disabled selected>Seleccione producto</option>
                        @foreach($frutas as $fruta)
                        <option value="{{$fruta->id_fruta}}">{{$fruta->nombre}}</option>
                        @endforeach
                    </select>

                    <input name="cantidad" type="number" id="cantidad" class="input-cantidad" placeholder="Cantidad" min="0" max="7000">

                    <a id="btn" class="btn btn-terciario">Agregar</a>
                    <br>
                    
                    <!--Js para controlar el evento de agregar producto-->
                    <script src="js/javascript.js"></script>
                </div>

                <div>
                    <button name="btnSave" type="submit" id="btn1" class="btn btn-primario">Enviar Solicitud</button>
                </div>

                @if ( session('mensaje') )
                <div class="correcto">{{ session('mensaje') }}</div>
                @endif
            </form>
        </div>
        @stop
    </body>
</html>