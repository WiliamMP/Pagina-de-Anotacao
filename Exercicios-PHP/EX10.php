<?php

/*
[Exercicio 10]
Faca um algoritmo que leia o menor numero de tres digitados.
*/ 

$A1 = 12;
$B1 = 5;
$C1 = 2595;

if($C1>$B1){
    if($C1>$A1){
        echo "$C1 É o maior variavel dos três!";
    }else{
        echo "$A1 É o maior variavel dos três!";
    }
}else if($B1>$A1){
    if($B1>$A1){
        echo "$B1 É o maior variavel dos três!";
    }else{
        echo "$A1 É o maior variavel dos três!";
    }
}else if($A1>$B1){
    if($A1>$C1){
        echo "$A1 É o maior variavel dos três!";
    }
}



