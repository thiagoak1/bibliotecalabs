<?php  
require_once 'EditorClasse.php';



$editor = new Editor;
$editor->setNome($_POST['nome']);
$editor->setId($_POST['id']);

	$resultado  = $editor->alterar();

   if($resultado){ 

       echo "alteração realizada com sucesso!";
       
   }
      header('Location:selecionarEditor.php');