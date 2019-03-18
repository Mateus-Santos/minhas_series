<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/app.css">
    <script src="main.js"></script>
</head>
<body>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Gêneros</th>
    </tr>
  </thead>
  <tbody>
  @foreach($generos as $gen)
    <tr>
      <td>{{$gen->nome}}</td>
    </tr>
  @endforeach
  </tbody>
</table>
    
</body>
</html>