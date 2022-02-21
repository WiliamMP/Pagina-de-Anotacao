<?php

        /*[Exercicio 05
        Uma empresa tem para um determinado funcionario uma ficha contendo o nome,
        numero de horas trabalhadas e o nro de  dependentes de um funcionario
        Considerando que:
        a)A empresa paga 10 reais por hora e 20 reais por dependentes
        b)Sobre o salario sao feitos descontos de 8,5 %(187,00) para o INSS e 5%(101,00) para IR.
        Faca um algoritmo para ler o Nome,numero de horas 
        trabalh	leitura,escreva qual o nome ,salario bruto,
        valores descontados para cada tipo de imposto (INSS,IR)
        e finalmente qual o salario liquido do funcionario.*/

$NOME = "Wiliam";
$NUMERO_DE_HORAS = 1760;
$CONVERSÃO_MES = $NUMERO_DE_HORAS/220;
$SALARIO_BRUTO = 17600;
$SALARIO_LIQUIDO = 15224;
$INSS = 1496;
$IR = 880;

echo "$NOME Possui $NUMERO_DE_HORAS horas o equivalente a $CONVERSÃO_MES messes recebe de salário bruto R$$SALARIO_BRUTO,00".
     " ,Recebe um desconto de R$$INSS,00 do INSS e R$$IR,00 pelo imposto de renda, seu salário liquido é de R$$SALARIO_LIQUIDO,00";





