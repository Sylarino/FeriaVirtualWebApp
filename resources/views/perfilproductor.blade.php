@extends('layouts.master')
<!DOCTYPE html>
<html lang="en">
    <body>
        @section('content')
        <main class="blog">
            <h2 class="centrar-texto">¿Qué deseas realizar?</h2>

            <article class="curso grid">
                <div class="columnas-8">
                    <img src="img/productorFruta.jpg" alt="Imagen Curso">
                </div>
                <div class="columnas-10">
                    <h4 class="no-margin">Lista de tus frutas</h4>
                    <div class="campo enviar">
                    <form action="registrocamion">
<input type="submit" value="VER" class="btn btn-primario">

<article class="curso grid">
                <div class="columnas-8">
                <h4 class="no-margin">Información que te podria interesar </h4>
                <p>Presidente de Fedefruta plantea desafíos de la fruticultura frente a una segunda ola de Covid-19</p>
                    <img src="img/noticiafruta.jpg" alt="Imagen Curso">
                </div>
                <div class="columnas-10">
                    
                    <div class="campo enviar">
                        <a href="https://fedefruta.cl/" class="btn btn-primario">Revisa aquí </a>

</form>      
                        
        </main>
             
             <aside class="cursos">
                <h1 class="center">Promociones</h1>
                    
                <img src="img/productor.png" alt="Imagen Curso">    
                        <h4 class="center">Pulsa el boton para registrar tus promociones</h4>
                       

                        <a href="productor" class="btn btn-primario">ingresar Promociones </a>

                      
                    </li>
            
           
         
        </aside>
       
        @stop
    </body>
    
</html>