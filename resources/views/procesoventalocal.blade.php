@extends('layouts.master')
<!DOCTYPE html>
<html lang="en">
<body>
    @section('content')
    <main class="contenedor">
        <h2 class="centrar-texto">Proceso de venta local</h2>

        <div class="grid centrar-columnas">
            <div class="columnas-07">
                <img src="img/proceso.jpg" alt="imagen contacto">
            </div>

            <div class="columnas-10 formulario-contacto">
                <form action="#">
                    <div class="campo">
                        <label for="nombre">Tipo de fruta</label>
                        <input type="text" id="nombre" placeholder="tipo fruta">
                    </div>
                    <div class="campo">
                        <label for="nombre">Precio</label>
                        <input type="text" id="nombre" placeholder="precio">
                    </div>
                    <div class="contenedor">
                        <label for="calidad">Calidad</label>
                        <select id ="calidad" required>
                        <option value="">0</option>
                        <option value="masc">1</option>
                        <option value="feme">2</option>
                        <option value="otro">3</option>
                        <option value="masc">4</option>
                        <option value="feme">5</option>
                        <option value="otro">6</option>
                        <option value="masc">7</option>
                        
                        </select>
                    </div>
                    <div class="campo mensaje">
                        <label for="mensaje">Cantidad</label>
                        <input type="text" id="mensaje" placeholder="cantidad">
                    </div>
                    <div class="campo enviar">
                        <input type="submit" value="Enviar" class="btn btn-primario">
                    </div>
                </form>
            </div>
        </div>

    </main>
    @stop
</body>
</html>