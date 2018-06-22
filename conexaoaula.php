<?php
class conexaobd
{
 private  $servidor = 'localhost',
$usuario='root',
$senha='',
$banco='aulaphp',
$conexao;
public function conectar(){
$this->conexao=mysqli_connect($this->servidor,$this->usuario,$this->senha,$this->banco);	
if ($this->conexao){
	//echo "conectou";
	}
	} 
	public function query($query){
		return mysqli_query($this->conexao,$query);
	}
	
	public function desconectar(){
		mysqli_close($this->conexao);
	}
	
	
	
}
?>