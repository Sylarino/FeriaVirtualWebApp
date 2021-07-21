
<!doctype html>
<html lang="en">

  <head>
  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


    <title>tranportes!</title>


  </head>
  <div class="container">
	<h1 class="centrar-texto">Tranportes</h1>
  </div>
  <body>
  <table class="table table-borderless table-dark">
  <thead> 
    <tr>
      <!-- <th scope="col">id</th> -->
      <th scope="col">Marca</th>
      <th scope="col">Modelo</th>
      <th scope="col">Patente</th>
      <th scope="col">Carga</th>
      <th scope="col">Valor</th>

    </tr>
  </thead>
  <tbody>

  @foreach($transportes as  $transportes)
    <tr>
      <!-- <th scope="row">{{$transportes->id}}</th> -->
      <td>{{$transportes->Marca}}</td>
      <td>{{$transportes->modelo}}</td>
      <td>{{$transportes->patente}}</td>
      <td>{{$transportes->carga}}</td>
      <td>{{$transportes->valor}}</td>
    </tr>
    @endforeach()


  </tbody>
 
</table>
<div class="d-grid gap-10 col-1 mx-auto">
<a href="menutransportista" class="btn btn-secondary btn-lg" >volver</a></div>

</html>