<?php

/* 1. Verificação de Idade
Peça para o usuário digitar sua idade.
• Use if...else para verificar:
o Maior de idade (18 anos ou mais)
o Menor de idade (menos de 18 anos) */

$idade = (int)readline("Digite a sua idade: ");
if($idade >= 18){
    echo "Você é maior de idade";
}
else{
    echo "Você é menor de idade";
};

/*2. Classificação de Nota
Leia uma nota de 0 a 10.
• Use if...elseif...else para classificar:
o Nota ≥ 9 → Excelente
o Nota ≥ 7 → Bom
o Nota < 7 → Reprovado*/

$nota = (int)readline("Digite a nota: ");
if ($nota >= 9) {
    echo "Classificação: Excelente";
}else if ($nota >= 7) {
    echo "Classificação: Bom";
}else{
    echo "Classificação: Reprovado";
}


/*3. Dia da Semana
Solicite ao usuário um número de 1 a 7 e exiba o dia correspondente usando
switch...case.
• 1 → Domingo
• 2 → Segunda
• ...
• 7 → Sábado
*/
$diaSemana = (int)readline("Digite um dia da semana (1-7): ");
switch ($diaSemana) {
    case 1:
        echo "Dia escolhido: Domingo.";
        break;
    case 2:
        echo "Dia escolhido: Segunda Feira.";
        break;
    case 3:
        echo "Dia escolhido: Terça Feira.";

        break;
    case 4:
        echo "Dia escolhido: Quarta Feira.";
        break;
    case 5:
        echo "Dia escolhido: Quinta Feira.";
        break;
    case 6:
        echo "Dia escolhido: Sexta Feira.";
        break;
    case 7:
        echo "Dia escolhido: Sabado.";
        break;
    default:
        echo "Escolha um dia valido (1-7).";
        break;
}

/*
4. Calculadora Simples
Peça dois números e uma operação (+, -, *, /).
• Use switch...case para realizar a operação e exibir o resultado.*/

$num1 = (float)readline("Escolha o primeiro número: ");
$num2 = (float)readline("Escolha o segundo número: ");
$sinal = (string)readline("Escolha uma operação(+, -, *, /): ");
$resultado = 0;
switch ($sinal){
    case "+":
        $resultado = $num1 + $num2;
        break;
    case "-":
        $resultado = $num1 - $num2;
        break;
    case "*":
        $resultado = $num1 * $num2;
        break;
    case "/":
        $resultado = $num1 / $num2;
        break;
    default:
        $resultado = "Operação invalida";
        break;
}
echo "$num1 $sinal $num2 = $resultado";

/* 5. Contagem Progressiva
Use um for para exibir os números de 1 a 10 na tela.*/

for ($i = 1; $i <= 10; $i++){
    echo $i, "\n";
}



/*6. Contagem regressiva
Peça um número inicial e exiba a contagem regressiva até 1 usando for.*/

for ($i = (int)readline("Escolha um número: "); $i >= 0; $i--){
    echo $i."\n";
}

/*7. Números Pares
Peça um número final e use for para exibir todos os números pares de 0 até esse
número.*/

$numeroFinal =  (int)readline("Escolha um número final: ");
for ($i = 0; $i <= $numeroFinal; $i++){
    if($i %2== 0){
        echo "$i é um número par \n";
    }
}

/*8. Tabuada
Solicite ao usuário um número e use for para exibir sua tabuada de 1 a 10.*/

$numTabuada =  (float)readline("Escolha um número para exibir sua tábuada: ");
for($i = 0; $i <= 10; $i++){
    echo "$numTabuada x $i = ", $i * $numTabuada, "\n";
}

/*9. Classificação de Temperatura
Peça a temperatura e use if...else para exibir:
• Menor que 15°C → "Frio"
• Entre 15°C e 25°C → "Agradável"
• Maior que 25°C → "Quente"*/

$temperatura = (float)readline("Temperatura: ");
if ($temperatura > 25) {
    echo "Está fazendo $temperatura Cº\nSituação: Quente";
}else if($temperatura >=15){
    echo "Está fazendo $temperatura Cº\nSituação: Agradavel";
}else{
    echo "Está fazendo $temperatura Cº\nSituação: Frio";
 }


/*
10. Menu Interativo
Mostre no console:
1 - Olá
2 - Data Atual
3 - Sair
• Use switch...case para executar a opção escolhida pelo usuário.
• O programa só termina quando o usuário escolher "3 - Sair".
• Use for para repetir o menu um número fixo de vezes, por exemplo, 5 vezes.*/

for ($i = 0; $i <= 5; $i++){

    echo "\n------------------------------Escolha uma opção------------------------------";
    echo "\n1 - Olá\n2 - Data atual\n3 - Sair";
    $escolha = (int)readline("\nOpção: ");
    echo "\n-----------------------------------------------------------------------------\n";
    switch ($escolha) {
        case 1:
            ola();
            break;
        case 2:
            dataAtual();
            break;
        case 3:
            echo "Saindo do programa...";
            $i = 5;
            break;
        default:
            echo "Escolha invalida";
            break;
        }
}

function ola()  {
    echo "Olá.";
}
function dataAtual(){
    echo "Data atual: ", date("d-m-Y");
}