<?php
require_once 'Cliente.php';
ini_set("display_errors","on");
$cliente = new Cliente;
$cliente->setId($_GET['id']);

$res= mysqli_fetch_assoc($cliente->selectOne());
$_SESSION['nome'] = $res['name'];
$_SESSION['cpf']  = $res['cpf'];
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
<body>
<form  method="POST"  action="alterarCliente.php">
	<input type="hidden" name="id" value="<?php echo $res['id']?>"/>
  <div class="form-group">
    <label >coloca o nome vacilao</label>
    <input type="text" class="form-control" name="nome" value="<?php echo $_SESSION['nome']?>">
  </div>
   <div class="form-group">
    <label >cpf</label>
    <input type="number" class="form-control" name="cpf" value="<?php echo $_SESSION['cpf']?>">
  </div>
  <button type="submit" class="btn btn-primary">Alterar essa porra</button>
</form>
</body>
</html>
