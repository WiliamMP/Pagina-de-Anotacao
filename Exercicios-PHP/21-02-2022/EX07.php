<?php
/*[Exercicio 07
Faça um programa que leia o horário de entrada (hora e minuto)
e o horário de saída (hora e minuto) de um empregado e imprima
quanto tempo, no formato hora:minuto, o empregado ficou na empresa.*/


// Entrada
$horario_de_entrada_hora = 07;
$horario_de_entrada_minuto = 00;
// Saida
$horario_de_saida_hora = 17;
$horario_de_saida_minuto = 30;

$quanto_tempo_trabalhando_horas = $horario_de_saida_hora - $horario_de_entrada_hora;
$quanto_tempo_trabalhando_minutos = $horario_de_saida_minuto - $horario_de_entrada_minuto;

echo 'O tempo que o funcionario ficou trabalhando foi de: ' . $quanto_tempo_trabalhando_horas . ':' . $quanto_tempo_trabalhando_minutos;