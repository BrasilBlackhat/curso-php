<?php require_once('./config/db.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Criando Meu sistema de Agenda!</title>
    <link rel="stylesheet" href="./css/style.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <h1> Lista de Tarefas Lucas Oliveira</h1>
    <div class="formulario">
      <form class="formTarefa" action="savetarefa.php" method="post">
      <label for="tarefa">Tarefa</label>
      <input type="text" id="tarefa" name="tarefa" value="">
      <input type="submit" value="Enviar">
      </form>
    </div>
      <div class="tarefas">
        <ul>
          <?php
              $query = mysql_query("SELECT * FROM tarefas") or die(mysql_error());
              while ($row = mysql_fetch_array($query, MYSQL_NUM)) {
          ?>
          <li>
            <span><?= $row[1]; ?></span>
            <a href="editar.php?id=<?= $row[0] ?>"class="butao btn-sucess">Editar</a>
            <a href="excluir.php?id=<?= $row[0] ?>"class="butao btn-excluir">Remover</a>
          </li>
        <?php }  ?>
        </ul>

      </div>
  </body>
</html>
