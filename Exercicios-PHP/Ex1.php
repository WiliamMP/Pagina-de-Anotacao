<?php

echo '<b>Algoritimo para cálcular estoque médio </br></br></b>';

$QUANTIDADE_MINIMA = 10;
$QUANTIDADE_MAXIMA = 1000;
$ESTOQUE_MEDIO = ($QUANTIDADE_MINIMA + $QUANTIDADE_MAXIMA);

echo "Seu estoque medio é de aproximadamente: $ESTOQUE_MEDIO</br>";
echo '(Usando aspas simples) Seu estoque medio é de aproximadamente: ' . $ESTOQUE_MEDIO . '</br>';
/*
Outra atividade
 *  */

// Cotação do dolar 09/02/2022
$VALOR_DO_DOLAR = 5.24;
// Mudar o VALOR_EM_REAIS muda o quantidade de reais que você tem
$VALOR_EM_REAIS = 50.00;
$CONVERSAO = $VALOR_DO_DOLAR * $VALOR_EM_REAIS;
echo '</br><b>Exercicio do Dolar</b>';
echo "</br></br>50 Reais em dolar (levando em conta que o dolar está 5,24) equivale a: <b>$CONVERSAO</b> Reais";


$PRIMEIRO_NUMERO = 1;
$SEGUNDO_NUMERO = 2;
$TERCEIRO_NUMERO = 3;
$QUARTO_NUMERO = 4;

$QUADRADO_PRIMEIRO = 1;
$QUADRADO_SEGUNDO = 4;
$QUADRADO_TERCEIRO = 9;
$QUADRADO_QUARTO = 16;

$SOMA_TODOS_QUADRADOS = $QUADRADO_PRIMEIRO + $QUADRADO_SEGUNDO + $QUADRADO_TERCEIRO + $QUADRADO_QUARTO;



echo '</br></br><b>Exercicio do Numero ao quadrado</b></br></br>A seguir os valores e seus quadrados 1^2 = 1, 2^2 = 4, 3^2 = 9, 4^2 = 16 </br>';
echo "Somando todos os quadrados temos: $SOMA_TODOS_QUADRADOS";