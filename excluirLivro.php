<?php
	ini_set("display_errors","on");
	require_once 'livro.php';
	require_once 'LivroClasse.php';

	$livro = new Livro;
	$livro->setId($_GET['id']);
	$l = $livro->excluir();
  if($l)
	{
	echo 'Usuario excluido com sucesso !';
	}
	else
	{
	echo 'Erro ao tentar excluir usuario';
	}
	header('Location:selecionarLivro.php');

