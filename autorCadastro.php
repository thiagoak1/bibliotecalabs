<?php 
ini_set("display_errors","on");
require_once 'AutorClasse.php';
require_once 'autorPagina.php';
	
	$autor = new Autor;

	$autor->setNome($_POST['nome']);
	$resultado   = $autor->insert();
 if($resultado)
 	{ 
     echo "Cadastro realizado com sucesso!";    
    }

