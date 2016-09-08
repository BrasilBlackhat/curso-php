<?php include_once('include-header.php'); ?>
<div class="panel panel-default">
  <div class="panel-body">
<!-- Criando um painel no formulario -->
    <h1> Lista de Tarefas Lucas Oliveira</h1>
      <div class="formulario">
        <form class="formTarefa form-horizontal" action="savetarefa.php" method="post">
          <div class="form-group">
            <label for="tarefa"class="col-sm-3 control-label">Tarefa</label><!-- Fazendo  alinhamento do label dentro do panel -->
            <div class="col-sm-6">
              <!-- Formatando caixa de texo -->
              <input type="text" id="tarefa" name="tarefa" class="form-control" value="">
            </div>
          </div>
          <!-- Iniciando formatacao do botão -->
          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
              <input type="submit" value="Enviar" class="btn btn-default">
            </div>
          </div>
          <!-- Fechamento do grupo do botao-->
        </form>
    </div>
</div>
    </div>
      <div class="panel panel-default">
          <div class="panel-heading">
            <!-- Acho que nao a necessidade em usar   Tarefas Agendadas nesse espaço -->
          </div>
          <div class="panel-body">
            <table class="table table-striped">
              <thead>
                <th>  Tarefas Agendadas </th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
              </thead>
              <tbody>
                  <?php
                  $query = mysql_query("SELECT * FROM tarefas") or die(mysql_error());
                  while ($row = mysql_fetch_array($query, MYSQL_NUM)) {
                  ?>
                  <tr>
                    <td><?= $row[1]; ?> </td>
                    <td><a href="editar.php?id=<?= $row[0] ?>"class="btn btn-sucess">Editar</a></td>
                    <td><a href="excluir.php?id=<?= $row[0] ?>"class="btn btn-danger">Remover</a></td>
                  </tr>
                  <?php }  ?>
              </tbody>
            </table>
            </div>
          </div>
      </div>
<?php include_once('include-footer.php'); ?>
