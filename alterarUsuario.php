<?php

require_once 'Usuario.php';

	
	$usuario = new Usuario;

	$usuario->setCpf($_POST['cpf']);
	$usuario->setNome($_POST['nome']);
	$usuario->setDataNascimento($_POST['birth_date']);
	$usuario->setEmail($_POST['email']);
	$usuario->setId($_POST['id']);

	$resultado   = $usuario->alterar();

   if($resultado){ 

       echo "alteração realizada com sucesso!";
       
   }

 