@extends('layouts.master')
<!DOCTYPE html>
<html lang="en">
<body>
    @section('content')
         <main class="contenedor">
        <h2 class="centrar-texto">Agrega y edita tus transportes</h2>

        <div class="grid centrar-columnas">
            <div class="columnas-12">
                <img src="img/camio.png" alt="imagen contacto">
            </div>
<div></div>


            @if (session('mensaje'))
                    <div class="alert alert-success">
                        {{ session('mensaje') }}
                    </div>
                @endif
          <div class="columnas-10 formulario-contacto">
        @foreach ($errors->get('patente') as $error)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                patente duplicada
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <div class="alert alert-primary" role="alert">
  A simple primary alert—check it out!
</div>

                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
        @endforeach

          <div class="grid centrar-columnas">
            <div class="columnas-10 formulario-contacto">
                <form action="{{ route('transpo.crear') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
                    <h4 class="centrar-texto">Ingresa tu transporte</h4>

                <div class="campo">
                    <label for="marca">MARCA</label>
                    <select name ="marca" value="{{ old('marca') }}" required>
                    <option value="">MARCA</option>
                    <option value="Pegeout">Pegeout</option>
                    <option value="Mercedes Benz">Mercedes Benz</option>
                    <option value="Daf Truck">Daf Truck</option>
                    <option value="Scania">Scania</option>
                    <option value="Iveco">Iveco</option>
                    <option value="Volvo">Volvo</option>
                    <option value="Renault">Renault</option>
                    <option value="Isuzu">Isuzu</option>
                    <option value="BMW">BMW</option>
                    <option value="Ford">Ford</option>
                    <option value="Chevrolet">Chevrolet</option>
                    <option value="Kia">Kia</option>
                    <option value="Hyundai">Hyundai</option>
                    </select>
                </div>

                        <div class="campo">
                            <label name="modelo">Modelo</label>
                            <input type="text" name="modelo" placeholder="INGRESE MODELO DEL VEHICULO" value="{{ old('modelo') }}" maxlength="15" required>
                        </div>
                    <div class="campo">
                            <label name="patente">Patente</label>
                            <input type="text" name="patente" placeholder="HJPK82" value="{{ old('patente') }}" minlength="6" maxlength="6" required>
                        </div>
                        <div class="campo">
                            <label name="carga">Carga</label>
                            <input type="text" name="carga" placeholder="Ingrese el tonelaje ej: 4000" value="{{ old('carga') }}" minlength="4" maxlength="5" required>
                        </div>
                    
                    <div class="campo">
                            <label name="valor">Valor</label>
                            <input type="text" name="valor" placeholder="Ingresa valor por kilometraje" value="{{ old('valor') }}" minlength="4" minlength="6" required>
                        </div>
                    
                    <div class="campo enviar">
                    <input type="submit" name="btnSave" value="Registrarse" class="btn btn-primario">
                    </div>
                </form>
            </div>
            
        </div>
    </main>
    @stop
</body>
</html>