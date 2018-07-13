<?php  
ini_set("display_errors","on");
require_once 'conexao.php';
require_once 'GeneroClasse.php';
require_once 'generoPagina.php';

		$genero = new Genero;
		$genero->setNome($_POST['nome']);
	  if($genero->insert())
		{
			echo 'Cadastrado com sucesso';
		}



