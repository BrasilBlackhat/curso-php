<?php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
$host = 'localhost';
$usuario = 'root';
$senha = '';
$db = 'cursophp';
$conexao = mysql_connect($host,$usuario,$senha)or die(mysql_error());
#echo "<center>\nConecçao Estabelecida com Sucesso!</center>";
$selectBanco = mysql_select_db($db) or die(mysql_error());
#echo "<center>Banco De Dados Logado! ";
?>
