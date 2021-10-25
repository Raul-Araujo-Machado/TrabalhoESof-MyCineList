<?php 
include_once('../Model/banco.php');
include_once('../Model/usuario.php');

  $senha = $_POST["senha"];
  $nome=$_POST["nome"];
  $email = $_POST["email"]; 
  
  $usuario = new Usuario($senha, $nome, $email);
  $usuario->insereUsuario();
?>