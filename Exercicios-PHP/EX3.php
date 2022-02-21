<?php

$VALOR_A = 2;
$VALOR_B = 2;
$VALOR_C;

// Esta linguagem possui a msm regra do lua, 3(===) iguais compara as variaveis
// Dois iguais(==) os numeros
echo "A = $VALOR_A</br>";
echo "B = $VALOR_B</br>";

if($VALOR_A == $VALOR_B){
    echo "Os valores $VALOR_A e $VALOR_B são iguais então: </br>";
    $VALOR_C = $VALOR_A + $VALOR_B;
    echo "valor de C é igual a $VALOR_C</br>"; 
}else{
   echo "Os valores $VALOR_A e $VALOR_B não são iguais então: </br>";
   $VALOR_C = $VALOR_A * $VALOR_B;
   echo "valor de C é igual a $VALOR_C</br>";
}
