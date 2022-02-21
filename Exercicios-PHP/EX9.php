<?php

/*Um estudante muito metódico estava matriculado em 6 disciplinas, e dispunha de 1 hora e 40 minutos para estudar. Sua intenção era dividir o tempo disponível igualmente para
as 6 disciplinas, e descansar livremente o tempo restante. Faça um programa que calcule o tempo
que ele deve dedicar para cada disciplina e o tempo livre.*/

/*86400 - 24 horas 
6 - disc 
6000 - 1 hora e 40 minutos*/

$Disponivel = 6000;
$Disciplinas = 6;
$TempoLivre = 86400 - $Disponivel;

echo "O estudante tem $TempoLivre de tempo livre";

$Divisao = 6000/6;
$Conversao = $Divisao/60;


echo "Ele pode estudar $Conversao minutos para cada disciplina!";

