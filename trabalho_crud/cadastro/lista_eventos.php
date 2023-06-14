<?php
   include_once "banco.php";

   include_once "../style/cabecalho_2.php";

   $sql = "SELECT * FROM evento";
   $result = mysqli_query($banco, $sql);
?>

     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

     <div class='container'>
        <a href="formulario.php" class='btn btn-success'>Inserir</a>
     <table class="table table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Data</th>
      <th>Local</th>
      <th>Descrição</th>
     
    </tr>
  </thead>
  <tbody>
    <?php while ($row = mysqli_fetch_assoc($result)): ?>
      <tr>
        <td><?php echo $row['idprimario']; ?></td>
        <td><?php echo $row['nome']; ?></td>
        <td><?php echo $row['data']; ?></td>
        <td><?php echo $row['local']; ?></td>
        <td><?php echo $row['descricao']; ?></td>
        <td>
          <a href='formulario.php?id=<?php echo $row['idprimario']; ?>' class="btn btn-primary"><i class="bi bi-pencil"></i> Editar</a>
          <a href='excluir.php?id=<?php echo $row['idprimario']; ?>' class="btn btn-danger"><i class="bi bi-trash"></i> Excluir</a>
        </td>
      </tr>
    <?php endwhile;?>
    </div>
  </tbody>
</table>