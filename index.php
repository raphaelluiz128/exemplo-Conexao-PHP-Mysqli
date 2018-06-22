<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="estilox.css"/>
  <meta charset="UTF-8"/>
  <title>Cadastro</title>
  
</head>
 
<body>
<div id="divsite">
<h1><center><p> Formulário </p></center></h1>
<div id="divcabecalho">
</div>
<div id ="divconteudo">
  <form id ="formIncluirU" method="post" action="tratamentofuncao.php" >
  Email: <input type="text" name="email">	
  Nome: <input type="text" name="nome">
  Mensagem: <input type="text" name="mensagem">
  <input type="submit" value="enviar" name="incluirU">
  </form>
  <form id ="formExcluirU" method="post" action="tratamentofuncao.php" >
  Digite o nome para excluir: <input type="text" name="nome">
  <input type="submit" value="excluir" name="ExcluirU">
  </form>
 
  <br/>
 


  
  </div>
<p>



<div id="divMostrarTU">
<h3> Usuários</h3>
	<?php require_once 'funcoes.php';
		
		$mostrarUsuarios=new bancoUsuario();
		$mostrarUsuarios->mostrarUsuarios();
	?>

</div>

</p>
</div>

</body>
</html>



