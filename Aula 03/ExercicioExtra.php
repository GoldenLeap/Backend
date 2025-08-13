<?php 
    /* Faça um algoritmo que leia 2 valores digitados pelo usuario
    e interprete o tipo de váriavel que foi digitado. Caso os TIPOS sejam iguais,
    a seguinte mensagem vai aparecer "Variaveis de tipos iguais! Primeiro valor
    do tipo [type] e segundo valor do tipo [type]". Caso não, a seguinte mensagem
    'ERRO! Váriaveis de tipos diferentes. Primeiro valor do tipo [type] e segundo
    valor do tipo [type]'
    */

    $var1 = readline("Digite qualquer valor: ");
    $var2 = readline("Digite outro valor: ");
    
    
    $tipoVar1 = gettype($var1);
    $tipoVar2 = gettype($var2);
    
    if($tipoVar1 === $tipoVar2){
        echo "Variaveis de tipos iguais! Primeiro valor do tipo $tipoVar1 e segundo valor do tipo $tipoVar2";
    }else{
        echo "\e[0;31;40mERRO!\e[0m Váriaveis de tipos diferentes. Primeiro valor do tipo $tipoVar1 e segundo valor do tipo $tipoVar2\n";
    }