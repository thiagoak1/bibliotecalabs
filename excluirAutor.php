<?php 
	ini_set("display_errors","on");
	require_once 'AutorClasse.php';
	require_once 'selecionarAutorPagina.php';


	
	$autor = new Autor;
	$autor->setId($_GET['id']);
	$r = $autor->excluir();
if($r)
	{
	echo 'Editor excluido com sucesso !';
	}
else
	{
	echo 'Não foi possivel excluir editor! chame o cara do T.I!!';
	}


header('Location:selecionarAutorPagina.php');

