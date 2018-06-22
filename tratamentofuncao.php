<?php
require_once 'funcao.php';
 

 
if(isset($_POST["incluirU"])){
	$bancoUsuario=new bancoUsuario;
     $bancoUsuario->cadastrarUsuario();
	 echo '<meta http-equiv="refresh" content="0.2;URL=index.php" />';
}

if(isset($_POST["ExcluirU"])){
	$bancoUsuario=new bancoUsuario;
     $bancoUsuario->excluirUsuario();
	 echo '<meta http-equiv="refresh" content="0.2;URL=index.php" />';
}

?>