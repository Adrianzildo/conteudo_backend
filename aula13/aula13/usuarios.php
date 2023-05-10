<?php require "usuario/consultar_todos.php"; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Usuários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>

  <body>

    <div class="container">
    
    <h1>Usuários</h1>
    <hr>

    <a href="form_usuario.php" class="btn btn-success">
       Inserir novo

</a>
  
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Login</th>
      <th scope="col">Ações</th>
    </tr>
  
</thead>
  <tbody>

 <?php foreach($usuarios as $usuario):  ?>
    <tr>
       <td><?= $usuario->nome ?></td>
       <td><?= $usuario->login ?></td>
       <td>@mdo</td>
  </tr>
  <?php endforeach; ?>

  </tbody>
</table>

</div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>