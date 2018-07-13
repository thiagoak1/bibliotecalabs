      <?php
      ini_set("display_errors","on");
      require_once 'conexao.php';
      ?>
      <!DOCTYPE html>
      <html lang="pt-br">
      <head>
        <meta charset="utf-8"/>
        <title>Biblioteca</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
               <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
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
              <a class="nav-link" href="livro.php">livros<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="usuarioPagina.php">usuarios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="clientePagina.php">cliente</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="editorPagina.php">editor</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="autorPagina.php">autores</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="generoPagina.php">genero</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="emprestimos.php">Locação</a>
            </li>
          </ul>
          <span class="navbar-text">
        </span>
      </div>
    </div>
  </nav>
  <div class="container imagem">
  <h1>This is a "Big Data Artesanal"</h1>
  <img src="biblioteca.jpg"/>
  </div>
</divi>
<footer>
</footer>
</body>
</html>
