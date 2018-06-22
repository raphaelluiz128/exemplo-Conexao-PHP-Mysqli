<?php 

class usuario {
 
 private $email;
 private $nome;
 private $mensagem;
 
 
public function setEmail($email){
$this->email=$email; 
      }
public function getEmail (){
return $this->email;
   }
 
public function setNome ($nome){
$this->nome=$nome;
  }
public function getNome () {
return $this->nome;}
 
 public function setMensagem ($mensagem){
$this->mensagem=$mensagem;
  }
public function getMensagem () {
return $this->mensagem;}
 
 }




?> 