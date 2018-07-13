<?php 
require_once 'AutorClasse.php';

$autor = new Autor;
$autor->setNome($_POST['nome']);
$autor->setId($_POST['id']);

	$resultado = $autor->alterar();

if($resultado)
{
	echo "alteração realizada com sucesso!";
}

	header('Location:selecionarAutorPagina.php');





