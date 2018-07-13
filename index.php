   <?php
   ini_set("display_errors","on");
   require_once 'conexao.php';
   ?>
   <!DOCTYPE html>
   <html lang="pt-br">
   <head>
    <meta charset="utf-8"/>
    <title>Biblioteca</title>
    <link rel="stylesheet" type="text/css" media="screen" href="style.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"     integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </head>
  <body>
    <section class="header-menu">
      <div class="container">
 
    <div class="container mt-5">
      <div class="row mt-5 d-flex justify-content-center">
       <form method="POST" action="login.php">
         <div class="form-group">
           <label>Login:</label>
           <input class="form-control" type="text" name="login" id="login"><br>
           <label>Senha:</label>
           <input class="form-control" type="password" name="senha" id="senha"><br>
           <input class="btn btn-info btn-block" type="submit" value="entrar" id="entrar" name="entrar">
         </form>
       </div>
            </div>
    </section>
  
 </body>
</html>