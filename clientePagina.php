<?php
ini_set("display_errors","on");
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
  <legend><h1><center>Cadastro de clientes</center></h1></legend>
</div>
<div class="container-fluid">
  <div class="row">
   <form method="post" action="clienteCadastro.php">
    <table width="500px">
      <fieldset>
        <td>NOME:</td>
        <td><input type="text" name="nome" size="40"></td>
        <td>CPF:</td>
        <td><input type="number" name="cpf" size="11"></td>
       </fieldset>
      <input type="submit" value="Cadastrar cliente"/>
    </table>
  </form>
</div>
<div class="container-fluid text-center">
  <a class="btn btn-info btn-large mt-5" href="selecionarCliente.php">Listar clientes</a>
</div>
<footer>
</footer>
</body>
</html>