<?php
include_once('../Model/banco.php');

$banco = new Banco();

$query = sprintf("SELECT f.titulo, f.produtora, f.duracao, f.sinopse, f.codigo FROM filme as f, favorito as t, usuario as u where f.codigo = t.codigo and u.email = 'usuario@gmail.com'");
$banco->queryListaDados($query);

?>