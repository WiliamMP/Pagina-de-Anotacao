<?php

/*

[Exercicio 16
Uma pessoa com pouco tempo disponível
lê um livro por 5 minutos a cada dia,
6 dias por semana. Monte a fórmula e
escreva um programa que calcula e mostra
na tela quanto tempo, em horas, a pessoa
terá dedicado ao livro ao final de um ano.
*/


$minutes_per_day = 5;
$days_in_week = 6;
$books_readed_week = $minutes_per_day * $days_in_week;
$week_for_year = 52;
$minutes_year = $week_for_year * $books_readed_week;
$hour_year = $minutes_year / 60;
// um ano tem 52 semanas

echo "A pessoa que leu 5 minutos por dia, ao final do ano, terá lido $hour_year horas";

