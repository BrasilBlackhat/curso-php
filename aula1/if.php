<?php
  /*
    $a == $b	Igual	Verdadeiro (TRUE) se $a é igual a $b.
    $a === $b	Idêntico	Verdadeiro (TRUE) se $a é igual a $b, e eles são do mesmo tipo.
    $a != $b	Diferente	Verdadeiro se $a não é igual a $b.
    $a <> $b	Diferente	Verdadeiro se $a não é igual a $b.
    $a !== $b	Não idêntico	Verdadeiro de $a não é igual a $b, ou eles não são do mesmo tipo (introduzido no PHP4).
    $a < $b	Menor que	Verdadeiro se $a é estritamente menor que $b.
    $a > $b	Maior que	Verdadeiro se $a é estritamente maior que $b.
    $a <= $b	Menor ou igual	Verdadeiro se $a é menor ou igual a $b.
    $a >= $b	Maior ou igual	Verdadeiro se $a é maior ou igual a $b.
    $a <=> $b	Spaceship (nave espacial)	Um integer menor que, igual a ou maior que zero quando $a é, respectivamente, menor que, igual a ou maior que $b. Disponível a partir do PHP 7.

  */
?>
<?php
$idade = 17;
if ($idade < 18){
  echo "Catraca Liberada<br/>";#se o alor de idade for maior que 17 ele libera a catraca se nao ele vai pro else bloqueando a passagem
}else{
  echo "Saldo Insuficiente<br/>";
}

#nesse modo a baixo estamos lidando com identaçao fazendo o mesmo que o de cima
$idade2 = 17;
if ($idade2 > 18):
  echo "Transporte: Catraca Liberada<br/>";
else:
  echo "Transporte: Saldo Insuficiente <br/>";
endif;

$idade3 = 18;
if ($idade3 > 18):
  echo "Catraca Liberada<br/>";
elseif($idade <= 17):
  echo "Resultado Certo<br/>";
else:
  echo "Resultado11<br/>";
endif;

 ?>
