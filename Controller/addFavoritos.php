<?php 
include_once('../Model/banco.php');
include_once('../Model/filme.php');
 
    $codigo = $_POST["codigo"];
    $email = 'usuario@gmail.com';
    $query = sprintf("INSERT INTO favorito (email, codigo) VALUES ('$email','$codigo')");
    $banco = new banco();
    $banco->queryInsertDados($query);
    
?>