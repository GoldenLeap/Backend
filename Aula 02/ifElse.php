 <?php
    /*Exercicio 4: Crie um algoritmo que calcule a média entre 2 notas e fale
    se o aluno foi aprovado ou reprovado. Considere a média 7 como nota de corte.*/
    $nome = (string) readline("\nDigite o nome do aluno: ");
    $nota1 = (float) readline("\nDigite a primeira nota do aluno: ");
    $nota2 = (float) readline("\nDigite a segunda nota do aluno: ");
    $faltas = (int) readline("\nQuantas faltas o aluno teve: ");
    $aulas = 100;

    $aproveitamento = ceil(num: ( ($aulas - $faltas) / $aulas ) * 100);
    $media = ($nota1 + $nota2) / 2;
    echo "\n\nNota de corte: 7";
    if($faltas > $aulas){
        echo "\nAlgo deu errado ao analisar as faltas, finalizando o programa.";
        exit(1);
    };
    if ($media >= 7) {
        echo "\nSua nota final foi: ", $media,"\nResultado: Aprovado.\n";
    } else {
        echo "\nSua nota final foi: ", $media,"\nResultado: Reprovado.\n";
    }
    /* Implemente tambem uma condição que verifique a presença do aluno.
    O aluno será aprovado somente se a média for maior ou igual a 7 e a presença for maior que 
    75%*/

    echo "\nNota de corte: 7\nAproveitamento minimo: 75%";
    if ($media >= 7 && $aproveitamento >= 75) {
        echo "\nSua nota final foi: $media \nSeu aproveitamento: $aproveitamento\nResultado: Aprovado.\n";
    } else {
        echo "\nSua nota final foi: $media\nSeu aproveitamento: $aproveitamento%\nResultado: Reprovado.\n";
    }
    /* Caso o aluno tenha o nome "Enzo Enrico", ele será aprovado independente da media e presença. Crie uma
    Variavel $nome*/

    echo "\nNota de corte: 7\nAproveitamento minimo: 75%";
    if ($media >= 7 && $aproveitamento >= 75 || $nome == "Enzo Enrico") {
        echo "\nSeu nome: $nome\nSua nota final foi: $media \nSeu aproveitamento: $aproveitamento%\nResultado: Aprovado.";
    } else {
        echo "\nSeu nome: $nome\nSua nota final foi: $media\nSeu aproveitamento: $aproveitamento%\nResultado: Reprovado.";
    }