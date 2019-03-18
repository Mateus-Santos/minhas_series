<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lista de Gêneros</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/app.css">
    <script src="main.js"></script>
    <style>
        .center{
          position: absolute;
          left:36%;
          top: 20%;
          width: 30%;
          background-color: white;

        }
        body{
          background-color: #DFDCDC;
        }
        
        .titulo{
          position:absolute;
          left:43%;
          top:10%;
          color:black;
          font-size: 25pt;
          text-shadow: 0px 0px 5px black;
        }
    
    
    </style>
</head>
<body>
<h1 class="titulo">Lista de Gêneros</h1>
<div class="center">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Gêneros</th>
    </tr>
  </thead>
  <tbody>
  @foreach($generos as $gen)
    <tr>
      <td>{{$gen->id}}</td>
      <td>{{$gen->nome}}</td>
    </tr>
  @endforeach
  </tbody>
</table>
</div>
</body>
</html>