<?php
	ini_set("display_errors","on");
	require_once 'Usuario.php';
	require_once 'seleciona_usuario.php';

	$usuario = new Usuario;
		
	$usuario->setId($_GET['id']);
	
	

	$r = $usuario->excluir();

	if($r)
	{

		echo 'Usuario excluido com sucesso !';

	}

	else
	{
		echo 'Erro ao tentar excluir usuario';

	}

	header('Location:seleciona_usuario.php');

