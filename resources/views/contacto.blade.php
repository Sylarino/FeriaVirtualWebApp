@extends('layouts.master')
<!DOCTYPE html>
<html lang="en">
<body>
    @section('content')
    <main class="contenedor">
        <h1 class="centrar-texto">Contacto</h1>
        <h4 class="centrar-texto">Para consultas comerciales y afiliaciones contáctenos en el siguiente formulario </h4>
        <div class="grid centrar-columnas">
            <div class="columnas-12">
                <img src="img/contacto.jpg" alt="imagen contacto">
            </div>
            
            @if (session('mensaje'))
                    <div class="alert alert-success">
                        {{ session('mensaje') }}
                    </div>
                @endif

            <div class="columnas-10 formulario-contacto">
            <form action="{{ route('mensa.creado') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
        
                    <div class="campo">
                            <label name="nombre">Nombre</label>
                            <input type="text" name="nombre" placeholder="INGRESE NOMBRE Y APELLIDO" value="{{ old('nombre') }}" maxlength="25"  required>
                        </div>
                        <div class="campo">
                            <label name="email">E-MAIL</label>
                            <input type="text" name="email" placeholder="INGRESE SU MAIL EJ:JUAN@GMAIL.COM" value="{{ old('email') }}" maxlength="20" required>
                        </div>
                        
                        <div class="campo">
                            <label for="telefono">Teléfono</label>
                            <input type="text" name="telefono" placeholder="Por ejemplo, 930569842" value="{{ old('telefono') }}" minlength="8" minlength="13" required>
                        </div>

                    <div class="campo mensaje">
                        <label for="mensaje">Mensaje</label>
                        <textarea name="mensaje"value="{{ old('mensaje') }}" maxlength="200" required></textarea>
                    </div>
                    <div class="campo enviar">
                    <input type="submit" name="btnSave" value="Enviar" class="btn btn-primario">
                    </div>
                </form>
            </div>
        </div>
    </main>
    @stop
</body>
</html>