<?php
require_once 'classes/usuario.php';
require_once 'conexaoaula.php';
require_once 'index.php';

class bancoUsuario{	
	
	public function cadastrarUsuario(){
	$conexaobd=new conexaobd();
	$usuarios=new usuario();
	$conexaobd->conectar();
	
 $usuarios->setEmail($_POST["email"]);
 $usuarios->setNome($_POST["nome"]);
 $usuarios->setMensagem($_POST["mensagem"]); 
 $email=$usuarios->getEmail();
 $nome=$usuarios->getNome();
 $mensagem=$usuarios->getMensagem();
 $consulta="INSERT INTO contato (cod,email,nome,mensagem) 
VALUES(NULL,'$email','$nome' ,'$mensagem')";
 $conexaobd->query($consulta);
//echo $usuarios->getNome();
}



public function mostrarUsuarios(){
	
	$conexaobd=new conexaobd();
	$usuarios=new usuario();
	$conexaobd->conectar();
	
	$consulta="select * from contato";
	$dados=$conexaobd->query($consulta);
	$numerol=$dados->num_rows;
	$linha=mysqli_fetch_assoc($dados);
//echo $numerol;	

	echo "<table id=\"tabela1\"><tr><td id=\"coluna1\">Email</td><td id=\"coluna1\">Nome</td><td id=\"coluna1\">Mensagem</td></tr>";
    if($numerol > 0) {
     do {
      echo "<tr><td id=\"coluna1\">" . $linha['email'] . "</td><td id=\"coluna1\">" . $linha['nome'] . "</td><td id=\"coluna1\">" . $linha['mensagem'] . "</td></tr>";

     }while($linha = mysqli_fetch_assoc($dados));
	
	}
}
	
public function excluirUsuario(){
	
	$conexaobd=new conexaobd();
	$usuarios=new usuario();
	$conexaobd->conectar();
	
	 $usuarios->setNome($_POST["nome"]);
	 $nome=$usuarios->getNome();
	 
	$consulta="DELETE from contato WHERE nome='$nome'";
	$dados=$conexaobd->query($consulta);
	$numerol=$dados->num_rows;
	$linha=mysqli_fetch_assoc($dados);
	
	echo "<table id=\"tabela1\"><tr><td id=\"coluna1\">Email</td><td id=\"coluna1\">Nome</td><td id=\"coluna1\">Mensagem</td></tr>";
    if($numerol > 0) {
     do {
      echo "<tr><td id=\"coluna1\">" . $linha['email'] . "</td><td id=\"coluna1\">" . $linha['nome'] . "</td><td id=\"coluna1\">" . $linha['mensagem'] . "</td></tr>";

     }while($linha = mysqli_fetch_assoc($dados));
	
	}
	
	
}

	

}


?>