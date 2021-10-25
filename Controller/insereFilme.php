<?php 
include_once('../Model/banco.php');
include_once('../Model/filme.php');

    $titulo = $_POST["titulo"];
    $produtora=$_POST["produtora"];
    $duracao = $_POST["duracao"]; 
    $sinopse = $_POST["sinopse"];
    $filme = new Filme($titulo, $produtora, $duracao, $sinopse);
    $filme->insereFilme();
    
?>