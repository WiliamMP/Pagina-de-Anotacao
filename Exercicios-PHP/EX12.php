<?php

/*
[Exercicio 12
Faca um algoritmo que leia maior, o menor e o intermediario
de tres digitados.
*/

$A = 20;
$B = 5;
$C = 40;
$ResultadoMenor;
$ResultadoMaior;


// MAIOR


if($A>$B){
    if($A>$C){
        echo "O $A é o maior numero entre $B e $C</br>";
        $ResultadoMaior = "A";
        
    }   
}if($B>$A){
    if($B>$C){
        echo "O $B é o maior numero entre $A e $C</br>";
        $ResultadoMaior = "B";
    }   
}if($C>$B){
    if($C>$A){
        echo "O $C é o maior numero entre $B e $A</br>";
        $ResultadoMaior = "C";
    }   
}



// MENOR



if($A<$B){
    if($A<$C){
        echo "O $A é o menor numero entre $B e $C</br>";
        $ResultadoMenor = "A";
    }   
}if($B<$A){
    if($B<$C){
        echo "O $B é o menor numero entre $A e $C</br>";
        $ResultadoMenor = "B";
    }   
}if($C<$B){
    if($C<$A){
        echo "O $C é o menor numero entre $B e $A</br>";
        $ResultadoMenor = "C";
    }   
}


// INTERMEDIARIO



if($ResultadoMaior == "A" && $ResultadoMenor = "B"){
    echo "O $C é numero intermediario entre $A e $B";
}
if($ResultadoMaior ==  "A" && $ResultadoMenor == "C"){
    echo "O $B é numero intermediario entre $A e $C";
}
if($ResultadoMaior == "B" && $ResultadoMenor == "A"){
    echo "O $C é numero intermediario entre $A e $B";
}
if($ResultadoMaior == "B" && $ResultadoMenor == "C"){
    echo "O $A é numero intermediario entre $B e $C";
}
if($ResultadoMaior == "C" && $ResultadoMenor == "B"){
    echo "O $A é numero intermediario entre $B e $C";
}
if($ResultadoMaior == "C" && $ResultadoMaior == "A"){
    echo "O $B é numero intermediario entre $A e $C";
}
