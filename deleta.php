<?php


	require_once 'conexao.php';
	require_once 'index.php';


	$name     	=  $_POST['nome'];
	
	
	

	$script  = "SELECT * FROM readers where name = '$name'";

	$resultado   =  mysqli_query($conexao,$script);


 	while($res= mysqli_fetch_assoc($resultado))
 	{	


 		echo $res["name"].PHP_EOL .'<td><a href=excluir.php?idusuario=' . $res['id'] . '> Excluir </a></td>';
 		echo 'CPF : ',$res["cpf"].PHP_EOL;
 		echo 'numero do id'.PHP_EOL;
 		echo  $res['id'].PHP_EOL;
 	
 		
  	}

