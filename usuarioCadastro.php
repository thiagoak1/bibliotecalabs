<?php
ini_set("display_errors","on");
require_once 'Usuario.php';
require_once 'usuarioPagina.php';
	
	$usuario = new Usuario;

	$usuario->setNome($_POST['nome']);
	$usuario->setCpf($_POST['cpf']);
	$usuario->setDataNascimento($_POST['data_nascimento']);
	$usuario->setEmail($_POST['email']);
	$usuario->setPassword($_POST['senha']);
	
	$resultado   = $usuario->insert();

   if($resultado){ 

       echo "Cadastro realizado com sucesso!";
       
   }

 