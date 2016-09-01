<?php

$var = 56;
$var1 = 5.6;
$var2 = "5.6";
$var3 = TRUE;
$var4 = array("Lucas", "Oliveira", "Aprendendo PHP Ao Maximo");
$var5 = new Nome;
class Nome{

}

 ?>
<html>
  <head>
    <title> Aprendendo PHP com Mateus Araujo</title>
  </head>
  <body>
    <center>
    <br/>
     Trabalhando com Tipos de Vareaveis
     <br/>
    <?= gettype($var); ?>
    <br/>
    <?= gettype($var1); ?>
    <br/>
    <?= gettype($var2); ?>
    <br/>
    <?= gettype($var3); ?>
    <br/>
    <?= gettype($var4); ?>
    <br/>
    <?= gettype($var5); ?>
    </center>

  </body>
</html>
