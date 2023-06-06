<?php 
require_once "../login/controlar_acesso.php";
require_once "consultar_por_id.php";
require_once "../template/cabecalho.php";
?>
<div class="container">
    <h1>Cadastro de notícias</h1>
    <hr>

    <form action="<?php echo isset($noticia) ? 
     "atualizar.php":
     "inserir.php"; ?>"
      method="post" enctype="multipart/form-data">
        
        <input type="hidden" name="idnoticia" value="<?php echo $noticia->idnoticia ?? "" ;?>" ><br>

        <label class="form-label">Título</label><br>
        <input class="form-control" type="text" name="titulo" value="<?php echo $noticia->tipo ?? "" ;?>" ><br>

        <label class="form-label">Matéria</label><br>
        <textarea class="form-control" name="materia"><?php echo $noticia->materia ?? "" ;?></textarea><br>

        <label class="form-label">Categoria</label><br>
        <input class="form-control" type="text" name="categoria" value="<?php echo $noticia->categoria ?? "" ;?>" ><br>

        <label class="form-label">Foto</label><br>
        <input class="form-control" type="file" name="foto"><br>
        <br>
        <button type="submit" class="btn btn-info">Inserir</button>
    </form>
    
</div>

    <?php require_once "../template/rodape.php" ?>

    