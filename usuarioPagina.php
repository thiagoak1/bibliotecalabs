<?php
ini_set("display_errors","on");
require_once 'conexao.php';
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
  <legend><h1><center>Cadastro de usuários</center></h1></legend>
  <form  method="post" action="usuarioCadastro.php">
    <label>NOME:</label>
    <input type="text" class="form-control" name="nome"/>
    <label>CPF</label>
    <input type="number" class="form-control" name="cpf"/>
    <label>DATA NASCIMENTO</label>
    <input type="date" class="form-control" name="data_nascimento"/>
    <label>SENHA</label>
    <input type="password" class="form-control" name="senha"/>
    <label>EMAIL</label>
    <input type="email" class="form-control" name="email"/>
    <button type="submit" class="btn btn-default">CADASTRAR</button>
  </form>
</div>
</div>
</div>
<div class="container-fluid text-center">
  <a class="btn btn-info btn-large mt-5" href="seleciona_usuario.php">Listar usuários</a>
</div>
<footer>
</footer>
</body>
</html>