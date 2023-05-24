<?php
  require_once "consultar_por_id.php";
  require_once "../template/cabecalho.php";
?>
    
    <div class="container">
    <h1>Cadastro de noticia</h1>
    <hr>

    <form action="<?php echo isset($noticia) ? 
    "atualizar.php" : 
    "inserir.php"; ?>"
     method="post" enctype="multipart/form-data">
     
        <input type="hidden" name="idnoticia" value="<?php echo $noticia->idnoticia ?? "" ;?>"><br>
        
        <label class="form-laber">Titulo</label><br>
        <input class="form-control" type="type" name="titulo" value="<?php echo $noticia->titulo ?? "" ;?>"><br>

        <label class="form-laber">Materia</label><br>
        <textarea class="form-control"  name="materia"><?php echo $noticia->materia ?? "" ;?></textarea><br>

        <labe class="form-laber">Categoria</label><br>
        <input class="form-control" type="type" name="categoria" value="<?php echo $noticia->categoria ?? "" ;?>"><br>

        <labe class="form-laber">Foto</label><br>
        <input class="form-control" type="file" name="foto"><br>

        <button type="submit" class="btn btn-dark">Inserir</button>
        
    </form>
</div>


    
<?php require_once "../template/rodape.php"; ?>