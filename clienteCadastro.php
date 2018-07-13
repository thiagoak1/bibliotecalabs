<?php
ini_set("display_errors","on");
require_once 'Cliente.php';
require_once 'clientePagina.php';
	
	$cliente = new Cliente;

	$cliente->setNome($_POST['nome']);
	$cliente->setCpf($_POST['cpf']);
	
		$resultado   = $cliente->insert();

   if($resultado){ 

       echo "Cadastro realizado com sucesso!";
       
   }

 