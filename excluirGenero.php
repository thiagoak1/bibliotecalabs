<?php  
	ini_set("display_errors","on");
	require_once 'GeneroClasse.php';
	require_once 'selecionarGenero.php';

	$genero = new Genero;
	$genero->setId($_GET['id']);
	$r = $genero->excluir();
if($r)
	{
	echo 'Genero excluido com sucesso !';
	}
else
	{
	echo 'Não foi possivel excluir editor! chame o cara do T.I!!';
	}
header('Location:selecionarGenero.php');

