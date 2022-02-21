<?php
/*[Exercicio 06
Faça um programa que leia dois valores inteiros representando,
respectivamente, um valor de hora e um de minuto e informe
quantos minutos se passaram deste o início do dia. Exemplo:
valores lidos : 13 15
impressão : 795 minutos*/

$valor1 = 5;
$valor2 = 8;

echo "Valores lidos $valor1 e $valor2";


$conversao_da_hora_em_minuto = $valor1 * 60;
$calculo_total = $conversao_da_hora_em_minuto + $valor2;

echo "</br>impressão: $calculo_total";
