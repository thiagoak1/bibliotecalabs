<?php
ini_set("display_errors","on");
require_once 'conexao.php';
require_once 'LivroClasse.php';
require_once 'AutorClasse.php';
require_once 'GeneroClasse.php';
require_once 'EditorClasse.php';
$genero          = new Genero;
$autor           = new Autor;
$editor          = new Editor;
$resultadoEditor = $editor ->select();
$resultadoGenero = $genero ->select();
$resultadoAutor  = $autor  ->select();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8"/>
  <title>usuarios</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"     integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</head>
<!--aqui a pate do header de opcoes-->
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarText ">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
       <li class="nav-item active">
         <a class="nav-link" href="menu.php">home<span class="sr-only">(current)</span></a>
       </li>
       <span class="navbar-text">
       </span>
     </div>
   </div>
 </nav>
 <div class="container-fluid">
  <legend><h1><center>Cadastro de Livros</center></h1></legend>
  <form  method="post" action="livroCadastro.php">
    <label>Titulo:</label>
    <input type="text" class="form-control" name="titulo"/>
    <label>Data Publicação</label>
    <input type="date" class="form-control" name="publicacaoData"/>
    <div class="form-group">
      <select class="form-control" class="select" name="autor">
        <option disable selected style="display:none">selecione o Autor</option>
        <?php
        while($a=mysqli_fetch_array($resultadoAutor,MYSQLI_ASSOC))
          {?>
        <option value="<?php echo $a['id'];?>"><?php echo $a['name']?></option>
        <?php }
        ?>
      </select>
    </div>
    <div class="form-group">
      <select class="form-control" class="select" name="genero">
        <option disable selected style="display:none">selecione o Genero</option>
        <?php
        while($g=mysqli_fetch_array($resultadoGenero,MYSQLI_ASSOC))
          {?>
        <option value="<?php echo $g['id'];?>"><?php echo $g['name']?></option>
        <?php }
        ?>
      </select>
    </div>
    <div class="form-group">
      <select class="form-control" class="select" name="editor">
        <option disable selected style="display:none">selecione o Editor</option>
        <?php
        while($e=mysqli_fetch_array($resultadoEditor,MYSQLI_ASSOC))
          {?>
        <option value="<?php echo $e['id'];?>"><?php echo $e['name']?></option>
        <?php }
        ?>
      </select>
    </div>
    <button type="submit" class="btn btn-default">CADASTRAR</button>
  </form>
</div>
<div class="container-fluid text-center">
  <a class="btn btn-info btn-large mt-5" href="selecionarLivro.php">Listar Livros</a>
</div>
<footer>
</footer>
</body>
</html>