<?php 
require_once 'Cliente.php';

	$cliente = new Cliente;

	$cliente->setNome($_POST['nome']);
	$cliente->setCpf($_POST['cpf']);
	$cliente->setId($_POST['id']);
	
	$resultado = $cliente->alterar();

	
   if($resultado){ 

       echo "alteração realizada com sucesso!";
       
   }

   header('Location:selecionarCliente.php');