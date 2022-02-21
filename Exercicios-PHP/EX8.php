<?php



/*              [Exercicio 08]
Faca um algoritmo que leia os valores A,B,C
e diga se a soma de A + B é menor que C*/ 

$A = 5;
$B = 20;
$C = 26;

$AB = $A + $B;

if($AB<$C){
    echo $AB . ' É menor que: ' . $C;
}else if($AB == $C){
    echo "$AB é igual a $C";
}else{
    echo "$AB é maior que $C";
}

