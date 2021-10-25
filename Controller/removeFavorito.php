<?php 
include_once('../Model/banco.php');
include_once('../Model/filme.php');
 
    $codigo = $_POST["codigo"];

    $query = sprintf("DELETE FROM favorito WHERE CODIGO =".$codigo);
    $banco = new banco();
    $banco->queryRemoveDados($query);
    
?>