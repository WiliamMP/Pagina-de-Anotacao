<?php


/*[Exercicio 11
Faca um algoritmo que leia o maior numero de tres digitados.*/

$A = 5;
$B = 20;
$C = 26;

if($A>$B){
    if($A>$C){
        echo "O $A é o maior numero entre $B e $C";
    }   
}if($B>$A){
    if($B>$C){
        echo "O $B é o maior numero entre $A e $C";
    }   
}if($C>$B){
    if($C>$A){
        echo "O $C é o maior numero entre $B e $A";
    }   
}
