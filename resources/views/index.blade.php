@extends('layouts.master')
<!DOCTYPE html>
<html lang="en">
    <body>
        @section('content')
        <main class="blog">
            
            <article class="entrada-blog">
              
                <div class="contenido-blog">
                    <h3 class="no-margin">Beneficios de comer frutas</h3>
                    <p>En este apartado encontrarás todo sobre los beneficios que tiene consumir frutas.</p>
                   
                </div>
                <div class="imagen">
                    <img src="img/beneficios6.png" alt="Imagen blog">
                </div><!--imagen-->
                    <a href="beneficios" class="btn btn-primario">Ver</a>
            </article>
           
           
        </main>
        <aside class="cursos">
       

            <article class="entrada-blog">
                
                <div class="contenido-blog">
                    <h3 class="no-margin">Nuestras frutas</h3>
                    <p>En este apartado encontrarás todo sobre nuestras frutas.</p>
                <div class="imagen">
                    <img src="img/nuestrasfrutas.jpg" alt="Imagen blog">
                </div><!--imagen-->
                    <a href="frutas" class="btn btn-primario">Ver Productos</a>
                </div>
            </article>
        </aside>
        @stop
    </body>
</html>
