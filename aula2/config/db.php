<?php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
$host = 'localhost';
$usuario = 'root';
$senha = '';
$db = 'cursophp';
$conexao = mysql_connect($host,$usuario,$senha)or die('ERROR GERAL');
echo "<center>\nConecçao Estabelecida com banco de dados</center>";
?>
