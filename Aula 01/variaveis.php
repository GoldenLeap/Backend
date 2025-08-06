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
    
    /*Exercicio 4: Crie um algoritmo que calcule a média entre 2 notas e fale
    se o aluno foi aprovado ou reprovado. Considere a média 7 como nota de corte.*/
    $nota1 = 10;
    $nota2 = 0;
    $faltas = 0;
    $aulas = 100;
    $media = ($nota1 + $nota2) / 2;
    echo "\n\nNota de corte: 7";
    if ($media >= 7) {
        echo "\nSua nota final foi: ", $media,"\nResultado: Aprovado.\n";
    } else {
        echo "\nSua nota final foi: ", $media,"\nResultado: Reprovado.\n";
    }
    /* Implemente tambem uma condição que verifique a presença do aluno.
    O aluno será aprovado somente se a média for maior ou igual a 7 e a presença for maior que 
    75%*/
    $nota1 = 10;
    $nota2 = 10;
    $faltas = 26;
    $aulas = 100;
    $aproveitamento = ceil(num: ( ($aulas - $faltas) / $aulas ) * 100);
    $media = ($nota1 + $nota2) / 2;
    echo "\nNota de corte: 7\nAproveitamento minimo: 75%";
    if ($media >= 7 && $aproveitamento >= 75) {
        echo "\nSua nota final foi: $media \nSeu aproveitamento: $aproveitamento\nResultado: Aprovado.\n";
    } else {
        echo "\nSua nota final foi: $media\nSeu aproveitamento: $aproveitamento%\nResultado: Reprovado.\n";
    }
    /* Caso o aluno tenha o nome "Enzo Enrico", ele será aprovado independente da media e presença. Crie uma
    Variavel $nome*/

    $nome = "Enzo Enrico";
    $nota1 = 1;
    $nota2 = 1;
    $faltas = 26;
    $aulas = 100;
    $aproveitamento = ceil(num: ( ($aulas - $faltas) / $aulas ) * 100);
    $media = ($nota1 + $nota2) / 2;
    echo "\nNota de corte: 7\nAproveitamento minimo: 75%";
    if ($media >= 7 && $aproveitamento >= 75 || $nome == "Enzo Enrico") {
        echo "\nSeu nome: $nome\nSua nota final foi: $media \nSeu aproveitamento: $aproveitamento\nResultado: Aprovado.";
    } else {
        echo "\nSeu nome: $nome\nSua nota final foi: $media\nSeu aproveitamento: $aproveitamento%\nResultado: Reprovado.";
    }