<?php

/*[Exercicio 17
Vou e volto diariamente a pé para o trabalho, que dista
aproximadamente 800 m de minha casa. Supondo que trabalho 5 dias por semana, 45 semanas por ano, 
"bole" a operação matemática que deve ser efetuada para calcular quantos quilômetros, aproximadamente,
terei andado ao final de um ano. 
Elabore um programa que faça as contas e mostre o resultado 
*/ 

$one_day = 800 * 2;
$week = $one_day * 7;
$all_week = $week * 45;
$convert = $all_week / 1000;

echo "A pessoa aproximadamente terá andado $convert KM, ou seja uma ida a Registro, São Paulo, uma cidade intermediaria a Sorocaba.";

