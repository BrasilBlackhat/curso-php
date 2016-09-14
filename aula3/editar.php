<?php
require_once('./config/db.php');
$id = $_GET['id'];
$query = mysql_query("SELECT * FROM tarefas WHERE id = $id") or die(mysql_error());
$result = mysql_fetch_array($query);
?>
<?php include_once('include-header.php'); ?>
<!-- Adicionando Painel -->
<div class="panel panel-default">
  <div class="panel-body">
      <h1>Editar Tarefa: <?= $result['tarefa'] ?></h1>
  </div>
</div>
    <title>Tarefa: <?= $result['tarefa'] ?></title>
    <link rel="stylesheet" href="./css/style.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <form class="formTarega" action="updateTarefa.php" method="post">
      <div class="form-group">
        <label for="tarefa"class="col-sm-3 control-label">Tarefa </label>
        <input type="hidden" name="id" value="<?= $result['id'] ?>">
      </div>
      <div class="form-group col-sm-6">
        <input type="text" id="tarefa" name="tarefa" value="<?= $result['tarefa'] ?>"class="form-control">
      </div>
      <div class="">
        <input type="submit" value="Enviar"class="col-sm-3 btn btn-sucess">
      </div>
    </form>
<?php include_once('include-footer.php'); ?>
