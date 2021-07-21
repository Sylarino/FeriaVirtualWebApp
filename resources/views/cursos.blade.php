@extends('layouts.master')
<!DOCTYPE html>
<html lang="en">
    <body>
        @section('content')
        <main class="contenedor">
            <h2 class="centrar-texto">¿Qué proceso deseas realizar?</h2>

            <article class="curso grid">
                <div class="columnas-4">
                    <img src="img/curso1.jpg" alt="Imagen Curso">
                </div>
                <div class="columnas-8">
                    <h4 class="no-margin">Productor</h4>
                    <form action="perfilproductor">
                    
                    <input type="submit" value="Entrar" class="btn btn-primario">
</form>      
                  
                    </div>
            </article>
            <article class="curso grid">
            <div class="columnas-4">
                <img src="img/transportista.jpg" alt="Imagen Curso">
            </div>
            <div class="columnas-8">
                <h4 class="no-margin">cliente Interno</h4>
               <form action="clienteInterno">

                <input type="submit" value="Entrar" class="btn btn-primario">
               </form>              
            </div>
        </article>

            <article class="curso grid">
            <div class="columnas-4">
                <img src="img/transportista.jpg" alt="Imagen Curso">
            </div>
            <div class="columnas-8">
                <h4 class="no-margin">Tranportista</h4>
               <form action="transportista">

                <input type="submit" value="Entrar" class="btn btn-primario">
               </form>              
            </div>
        </article>

            <article class="curso grid">
                <div class="columnas-4">
                    <img src="img/curso2.jpg" alt="Imagen Curso">
                </div>
                <div class="columnas-8">
                    <h4 class="no-margin">Venta Externa</h4>
                    <input type="submit" value="Entrar" class="btn btn-primario">
                                    
                </div>
            </article>
        
            <article class="curso grid">
                <div class="columnas-4">
                    <img src="img/curso3.jpg" alt="Imagen Curso">
                </div>
                <div class="columnas-8">
                <h4 class="no-margin">Crear reporte</h4>
                    <input type="submit" value="Entrar" class="btn btn-primario">
                                    
                </div>
                </div>
            </article>
            <article class="curso grid">
                <div class="columnas-4">
                    <img src="img/curso4.jpg" alt="Imagen Curso">
                </div>
                <div class="columnas-8">
                <h4 class="no-margin">Solicitudes Recibidas</h4>
                    <input type="submit" value="Entrar" class="btn btn-primario">
                                    
                </div>
                </div>
            </article>
        </main>
        @stop
    </body>
</html>