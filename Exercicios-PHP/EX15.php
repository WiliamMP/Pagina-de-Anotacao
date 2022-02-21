<?php

/*[Exercicio 15
Conta telefônica - Uma conta telefônica é composta dos seguintes custos: assinatura: R$ 17,90
impulsos: R$ 0,04 por impulso que exceder a 90
interurbanos chamadas p/ celular: R$0,20 por impulso Monte a fórmula para calcular o valor da conta para 254 impulsos, R$34,29 de interurbanos e 23 chamadas para celular. Elabore um programa que mostra os custos, calcula e mostra o valor
total.*/ 


/*
254 impulsos
1 interurbano
23 chamadas de cel
*/

$quantidade_de_chamadas_celular = 23;
$quantidade_de_impulsos = 254;
$assinatura = 17.90;
$interurbanos = 34.29;
$impulsos = 0.04 * 254;
$chamada_de_celular = 0.20 * 23;
$total = $assinatura + $interurbanos + $impulsos + $chamada_de_celular;

echo 'Valor da assinatura: R$'.$assinatura.'0</br>';
echo 'Valor dos interurbanos: R$' . $interurbanos.'</br>';
echo 'Valor dos '.$quantidade_de_impulsos.' impulsos: R$'.$impulsos.'</br>';
echo 'Valor das '.$quantidade_de_chamadas_celular.' chamadas de celular: R$'.$chamada_de_celular.'0</br>';
echo 'Total a pagar: R$'.$total.'</br>'; 






