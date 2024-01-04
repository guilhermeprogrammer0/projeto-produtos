<?php
require_once "conexao.php";
require_once "functions.php";
excluir($conexao,$_REQUEST['id']);
header("location:lista_produtos.php");
?>