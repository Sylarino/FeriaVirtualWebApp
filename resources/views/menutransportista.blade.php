@extends('layouts.app')

@section('content')
<main class="blog">
            <h2 class="centrar-texto">¿Qué deseas realizar?</h2>

            <article class="curso grid">
                <div class="columnas-8">
                    <img src="img/camion.jpg" alt="Imagen Curso">
                </div>
                <div class="columnas-10">
                    <h4 class="no-margin">Lista de tus transportes</h4>
                    <div class="campo enviar">
                    <form action="registrocamion">
                    <input type="submit" value="VER" class="btn btn-primario">

<article class="curso grid">
                <div class="columnas-8">
                    <img src="img/patente.jpg" alt="Imagen Curso">
                </div>
                <div class="columnas-10">
                    <h4 class="no-margin">Revisa si tu patente posee multas</h4>
                    <div class="campo enviar">
                        <a href="https://consultamultas.srcei.cl/ConsultaMultas/consultaMultasExterna.do" class="btn btn-primario">Revisa aquí </a>

</form>      
                        
        </main>
             
             <aside class="cursos">
                <h2>Ingresa Tus transporte</h2>
                    
                        <h4 class="no-margin">Para ingresar nuevos transportes pulsa el siguiente boton </h4>
                        <p class="no-margin">  
                        <div class="campo enviar">
                        <form action="Agregartranporte">
                        <input type="submit" value="Entrar" class="btn btn-primario">
                    </li>
            
            <article class="entrada-blog">
              
              <div class="contenido-blog">
              <h3 class="no-margin">Noticias que te podrían interesar</h3>
                    <h5 class="no-margin">Revisa nuevas noticias sobre transportistas y camiones</h5>
                  

              </div>
              <div class="imagen"> 
              </div><!--imagen-->
                <a href="https://www.cnnchile.com/tag/camioneros/" class="btn btn-primario">Revisa aquí </a>
             </article>

         
        </aside>
       
       
@endsection