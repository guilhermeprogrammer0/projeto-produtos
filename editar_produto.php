<?php
require_once "conexao.php";
require_once "functions.php";
alterar($conexao,$_POST['codigo'],$_POST['nome'],$_POST['preco'],$_POST['id_produto']);


?>