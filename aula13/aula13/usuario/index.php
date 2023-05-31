<?php require "consultar_todos.php";
      require_once "../template/cabecalho.php";
      require_once "../template/menu restrito.php";
  ?>
   <div class="container">
    
    <h1>Usuários</h1>
    <hr>

<div class="text-end">
    <a href="formulario.php" class="btn btn-success">
       Inserir novo
  </a>
</div>
  
    <table class="table" id="tabela_dados">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Login</th>
      <th scope="col">Foto</th>
      <th scope="col">Ações</th>
    </tr>
  
</thead>
  <tbody>

 <?php foreach($usuarios as $usuario):  ?>
    <tr>
       <td><?= $usuario->nome ?></td>
       <td><?= $usuario->login ?></td>
       <td><img src="../uploads/<?= $usuario->foto ?>" height="25px"></td>
       <td class="text-end" width="25%">

        <a href="excluir.php?id=<?= $usuario -> idusuario ?>" class="btn btn-danger">
        <i class="fa-regular fa-trash-can"></i>
        Excluir
      </a>

        <a href="formulario.php?id=<?= $usuario -> idusuario ?>" class="btn btn-primary">
        <i class="fa-solid fa-pen-to-square"></i>
        Atualizar
      </a>


       </td>
  </tr>
  <?php endforeach; ?>

  </tbody>
</table>

</div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    
    <script>
      let table = new DataTable('#tabela_dados');
    </script>
  
      </body>
</html>