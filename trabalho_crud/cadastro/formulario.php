
 <?php
include_once "banco.php";
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "SELECT * FROM evento WHERE idprimario = $id";
    $result = mysqli_query($banco, $sql);
    $evento = mysqli_fetch_object($result);
}
?>
<?php include "../style/cabecalho.php"?>
<div class="container">
<form action="<?php echo isset($evento) ? 
    "atualizar.php" : 
    "inserir.php"; ?>"
     method="post" enctype="multipart/form-data">

     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
     
        <input type="hidden" name="idevento" value="<?php echo $evento->idprimario ?? "" ;?>"><br>

        <h1>Cadastrar eventos</h1>
      
        
        <label class="form-laber">Nome</label><br>
        <input class="form-control" type="type" name="nome" value="<?php echo $evento->nome ?? "" ;?>"><br>

        <label for="data">Selecione uma data:</label><br>
        <input type="date" id="data" name="data" class="form-control" value="<?php echo $evento->data ?? "" ;?>"><br>


        <labe class="form-laber">Local</label><br>
        <input class="form-control" type="type" name="local" value="<?php echo $evento->local ?? "" ;?>"><br>

        <labe class="form-laber">Descrição</label><br>
        <input class="form-control" type="type" name="descricao" value="<?php echo $evento->descricao ?? "" ;?>"><br>

        <button type="submit" class="btn btn-dark">Inserir evento</button>

        <?php include_once "../style/cabecalho.php" ?>
        <?php include_once "../style/rodape.php" ?>
        
    </form>
    </div>