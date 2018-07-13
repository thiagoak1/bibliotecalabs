<?php


	
	require_once 'conexao.php';
	require_once 'home_cadastro_clientes.php';

	$name     	=  $_POST['nome'];
	$cpf      	=  $_POST['cpf'];
	

	$script  = 'INSERT INTO readers(name,cpf) values ( \'' .$name. '\',\'' .$cpf. '\')';

	$resultado   =  mysqli_query($conexao,$script);

   if($resultado){ 

       echo "Cadastro realizado com sucesso!";
       
   }

   else 
   		{

   			echo 'nao esta enviando nenhum dado para o banco! noob!';
   		}



