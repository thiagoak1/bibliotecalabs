<?php
	require_once 'Cliente.php';

	ini_set("display_errors","on");
	

	
	$cliente = new Cliente;
		
	$cliente->setId($_GET['id']);

	$r = $cliente->excluir();

	if($r)
	{

		echo 'cliente excluido com sucesso !';

	}

	else
	{
		echo 'Erro ao tentar excluir cliente';

	}

	header('Location:selecionarCliente.php');

