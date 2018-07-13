<?php
ini_set("display_errors","on");
require_once 'conexao.php';
require_once 'EmprestimoClasse.php';
require_once 'Cliente.php';
require_once 'Usuario.php';
require_once 'LivroClasse.php';
$cliente =  new Cliente;
$resultadoCliente = $cliente->select();
$usuario = new Usuario;
$resultadoUsuario = $usuario->select();
$livro  = new Livro;
$resultadoLivro = $livro->select();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8"/>
  <title>Biblioteca</title>
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
       <a class="nav-link" href="menu.php">home<span class="sr-only">(current)</span></a>
     </li>
   </ul>
</nav>
<div class="row">
 <div class="container d-flex justify-content-center">   
   <div class="col-md-8">
     <div class="text-center titulo">
       <label>EMPRESTIMOS</label>
     </div>
     <div class="form-group">
       <form method="post" action="emprestimosdata.php">
        <label class="x-small">Data do emprestimo</label>
        <input class="form-control" type="date" name="dataEmprestimo">
        <div class="form-group"> 
          <label class="x-small">Data de devolução</label>
          <input  class="form-control" type="date" name="dataDevolucao">
        </div>
          <div class="form-group">
          <select class="form-control" class="select" name="livro">
            <option disable selected style="display:none">selecione o livro</option>
            <?php
            while($l=mysqli_fetch_array($resultadoLivro,MYSQLI_ASSOC))
              {?>
            <option value="<?php echo $l['id'];?>"><?php echo $l['title']?></option>
            <?php }
            ?>
          </select>
        </div>
        <div class="form-group">
          <select class="form-control" class="select" name="usuario">
            <option disable selected style="display:none">selecione o usuario</option>
            <?php
            while($u=mysqli_fetch_array($resultadoUsuario,MYSQLI_ASSOC))
              {?>
            <option value="<?php echo $u['id'];?>"><?php echo $u['name']?></option>
            <?php }
            ?>
          </select>
        </div>
        <div class="form-group">
          <select class="form-control" class="select" name="leitor">
            <option disable selected style="display:none">selecione o leitor</option>
            <?php
            while($l=mysqli_fetch_array($resultadoCliente,MYSQLI_ASSOC))
              {?>
            <option value="<?php echo $l['id'];?>"><?php echo $l['name']?></option>
            <?php }
            ?>
          </select>
        </div>
        <div class="form-group">
         <input class="form-control btn btn-primary"  type="submit" value="Realizar Emprestimo"/>
       </div>
     </form>


     <footer>
     </footer>
   </body>
   </html>

