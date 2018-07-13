<?php 
require_once 'conexao.php';

   ini_set("display_errors","on");

  $sql = "SELECT name,password FROM users WHERE name = :login AND password = :senha ";

 $consulta = $pdo->prepare($sql);
 $consulta->bindParam(':login',$_POST['login']);
 $consulta->bindParam(':senha',$_POST['senha']);

$consulta->execute();


      if($consulta->rowCount()<=0) {
            echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
          die();
         }

        else{
          setcookie("login",$login);
          header("Location:menu.php");
        }
  

