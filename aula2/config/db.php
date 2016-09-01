<?php

$usuario = 'root';
$senha = '';
$host = 'localhost';
$banco = 'cursophp';

$conexao = mysql_connect($host,$usuario,$senha) or die("Error Fatal");
echo "Conexao realizada com sucesso!";







 ?>
