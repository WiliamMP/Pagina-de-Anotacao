<?php

/*[Exercicio 07
Dados as seguintes informaçoes de um funcionario:
O salario bruto teve um reajuste de 38%.
O funcionario recebera uma gratificação de 20% do salario bruto.
O salario total é descontado 15% para encargos.*/ 

$NOME = "Wiliam";
$SALARIO_BRUTO = 2100;
$REAJUSTE = 798;
$GRATIFICACAO = 420;
$PERDEU = 315;
$LIQUIDO = 2100 + $REAJUSTE + $GRATIFICACAO - $PERDEU;

echo "$NOME Tem um salário bruto de R$$SALARIO_BRUTO,00 que passou por um reajuste, aumentando mais R$$REAJUSTE,00".
     " e uma gratificação de R$$GRATIFICACAO,00, mas foi descontado R$$PERDEU,00 pelos encargos, chegando assim a uma salario liquido de".
     " R$$LIQUIDO,00";

