<?php 
ini_set("display_errors","on");
require_once 'GeneroClasse.php';
require_once 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8"/>
  <title>Procurar por Genero</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"     integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="offset-3 d-flex text-center justify-content-center">
        <h1 class="display">Listagem de Genero</h1>
      </div>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Nome</th>
          </tr>
        </thead>

        <tbody>
          <?php
          $genero = new Genero();
          $dados = $genero->select();
          var_dump($dados);die;
          while($res=$select->fetch(PDO::FETCH_ASSOC)):            
            ?>
          <td>

           <?php //echo $user['name'] ?>
          </td>
          <td>
            <?php //echo $res['name']?>
          </td>
          <td>
            <a class="btn btn-info btn-block" href="excluirGenero.php?id=<?php echo $res['id'];?>">Excluir</a>
          </td>
          <td>
            <a class="btn btn-info btn-block" href="alterarGeneroPagina.php?id=<?php echo $res['id'];?>">Alterar</a>
          </td>
        </tr>
        
        ?>
      </tbody>
    </table>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="offset-10 col-md-2">
      <a class="btn btn-info mt-5" href="generoPagina.php">Voltar</a>
    </div>
  </div>
</div>
</body>
</html>