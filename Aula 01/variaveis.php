<?php 
    echo "Olá ";

    $nome = "Gabriel";
    $idade = 19;
    $ano_atual = 2025;
    
    $data_nasc = $ano_atual - $idade;
    echo $nome, ", você nasceu em ", $data_nasc;
    /* Dado uma frase "Programação em php." Transforma-la em maiuscula
    imprima, depois em minuscula e imprima de novo */
    $exerc2 = "Programação em php.";
    mb_internal_encoding("UTF-8");
    echo "\nMaiusculo: ", mb_strtoupper($exerc2);
    echo "\nMinusculo: ", mb_strtolower($exerc2);

    /* Numa dada frase "O PHP foi criado em mil novecentos e noventa e cinco".
    - Trocar o "O" (letra) por "0" (zero), o "a" por "4" e o "i" por "1"
    */
    $exerc3 = "O PHP foi criado em mil novecentos e noventa e cinco";
    echo "\nAntes do comando replace: \n", $exerc3;
    $exerc3 = str_replace(['o', 'a', 'i'], ['0', '4', '1'], $exerc3);
    echo "\nApós o comando replace: \n",$exerc3;
   