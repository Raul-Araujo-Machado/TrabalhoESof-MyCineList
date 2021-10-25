<?php
include_once('../Model/banco.php');

$banco = new Banco();
$query = sprintf("SELECT * FROM FILME");
$banco->queryListaDados($query);

?>