<?php  
require_once 'GeneroClasse.php';



$genero = new Genero;
$genero->setNome($_POST['nome']);
$genero->setId($_POST['id']);

	$resultado  = $genero->alterar();

   if($resultado){ 

       echo "alteração realizada com sucesso!";
       
   }
      header('Location:selecionarGenero.php');