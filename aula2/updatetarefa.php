<?php
require_once('./config/db.php');
$id = $_POST['id'];//usando metado post para fazer o envio
$tarefa =  $_POST['tarefa'];
$updated = date("Y-m-d H:i:s");//marca data e hora que foi editado
$insert = mysql_query("UPDATE tarefas SET tarefa = '$tarefa', updated_at = '$updated'
                       WHERE id = '$id' ") or die (mysql_error());//envia a atualizaçao para o banco de dados
header("Location: index.php");//retorna para a pagina
