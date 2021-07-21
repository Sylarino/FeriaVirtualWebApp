@extends('layouts.master')
<!DOCTYPE html>
<html lang="en">
<body>
    @section('content')
    <main class="contenedor">
        <h2 class="centrar-texto">REGISTRO DE PROMOCIONES Y COMBOS</h2>

        <div class="grid centrar-columnas">
            <div class="columnas-12">
                <img src="img/proceso.jpg" alt="imagen contacto">
            </div>
            
            @if (session('mensaje'))
                    <div class="alert alert-success">
                        {{ session('mensaje') }}
                    </div>
                @endif

            <div class="columnas-6 formulario-contacto">
            <form action="{{ route('promo.creacion') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
                   
                    <div class="campo">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" placeholder="INGRESA EL NOMBRE DE TU PROMOCION" value="{{ old('nombre') }}" minlength="4" minlength="13" required>
                        </div>
                        <div class="campo">
                            <label name="descripcion">Descripcion</label>
                            <input type="text" name="descripcion" placeholder="EJ: 2 MANZANAS, 3 PERAS, 5 ZAPALLOS,ETC..." value="{{ old('descripcion') }}"minlength="10" maxlength="200" required>
                        </div>
                        <div class="campo">
                            <label name="precio">Precio</label>
                            <input type="text" name="precio" placeholder="INGRESE EL PRECIO DE LA PROMOCIÓN" value="{{ old('precio') }}" maxlength="8" required>
                        </div>
                        
                        

                    
                    <div class="campo enviar">
                    <input type="submit" name="btnSave" value="Registrarse" class="btn btn-primario">
                    </div>
                </form>
                <a href="perfilproductor" class="btn btn-primario right" >Volver </a>
            </div>
        </div>
    </main>
    @stop
</body>
</html>