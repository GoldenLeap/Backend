<?php


/* Exercicio 1 Crie uma função exibirCarro($modelo, $marca, $ano, $revisao, $Ndonos) que receba como
parâmetros os dados de um carro e exiba uma mensagem no seguinte formato:
O carro Nissan Versa, ano 2020, já passou por revisão: Sim, número de donos: 2 */

function exibirCarro($modelo, $marca, $ano, $revisao, $Ndonos){

    $ans = $revisao?"sim": "não";
    echo "O carro $marca $modelo, ano $ano, já passou por revisão: $ans, número de donos: $Ndonos\n";
}

exibirCarro("Versa", "Nissan", 2020, true, 2);
exibirCarro("M5", "BMW", 2018, false, 2);
exibirCarro("911", "Porsche", 2026, false, 1);
exibirCarro("Dolphin", "BYD", 2023, false, 1);

/*📌 Exercício 2 – Função que verifica se o carro é seminovo
Crie uma função ehSeminovo($ano) que receba o ano de fabricação e retorne true se o
carro tiver até 3 anos de uso e false caso contrário.
Teste a função com os carros fornecidos.*/
function semiNovo($ano): bool{
    return $ano <= 3? true : false;
}
echo semiNovo(4)?"true\n":"false\n";

/*📌 Exercício 3 – Função que verifica necessidade de revisão
Crie uma função precisaRevisao($revisao, $ano) que retorne "Precisa de revisão" se $revisao
for false e o carro for anterior a 2022. Caso contrário, retorne "Revisão em dia".*/

function precisaRevisao($revisao, $ano){
    return !$revisao && $ano < 2022? "Precisa de revisão\n": "Revisão em dia\n";
}

echo precisaRevisao(true, 2020);
echo precisaRevisao(false, 2018);
echo precisaRevisao(false, 2026);
echo precisaRevisao(false, 2023);

/*Exercício 4 – Função que calcula valor estimado
Crie uma função calcularValor($marca, $ano, $Ndonos) que estime o preço do carro usando
regras simples, por exemplo:
• Carros da BMW e Porsche têm preço base de R$ 300.000
• Nissan: R$ 70.000
• BYD: R$ 150.000
• A cada dono adicional além do primeiro, o valor cai 5%
• Para cada ano de uso, o valor cai R$ 3.000
A função deve retornar o valor estimado e você deve imprimir o resultado para cada
carro.*/      
function calcularValor($marca, $ano, $Ndonos){
    $precoBase = match($marca){
        "Nissan" => 70000,
        "BYD" => 150000,
        "BMW", "Porsche" => 300000
    };
    $anoAtual = date("Y");
    $ano =$anoAtual - $ano;
    $ano = $ano < 0? 0: $ano;
    $descontoAno = $ano * 3000;
    $descontoDono = $Ndonos > 1?$precoBase * .05 * ($Ndonos-1) : 0;
    $desconto = $descontoAno + $descontoDono;
    return $precoBase - $desconto;
}
echo calcularValor("Nissan", 2020, 2). "\n";
echo calcularValor("BMW", 2018, 2). "\n";
echo calcularValor("Porsche", 2026, 1)."\n";
echo calcularValor("BYD", 2023, 1)."\n";


/*Exercício 5 – Função que retorna o carro mais novo
Crie uma função carroMaisNovo($carros) que receba um array associativo com os carros
(modelo, marca, ano, etc.) e retorne o modelo mais novo.
*/
function carroMaisNovo($carros){
    $modeloMaisnovo = $carros[0];
    foreach($carros as $carro){
        if($carro["ano"] > $modeloMaisnovo["ano"]){
            $modeloMaisnovo = $carro;
        }
    }
    return $modeloMaisnovo["modelo"];
}
$carros = [
    [
        "modelo" => "Versa",
        "marca" => "Nissan",
        "ano" => 2020,
        "revisao" => true,
        "donos" => 2
    ],
    [
        "modelo" => "M5",
        "marca" => "BMW",
        "ano" => 2018,
        "revisao" => false,
        "donos" => 2
    ],
    [
        "modelo" => "911",
        "marca" => "Porsche",
        "ano" => 2026,
        "revisao" => false,
        "donos" => 1
    ],
    [
        "modelo" => "Dolphin",
        "marca" => "BYD",
        "ano" => 2023,
        "revisao" => false,
        "donos" => 1
    ]
];

echo carroMaisNovo($carros)."\n";

/*Exercício 6 – Função que organiza os carros por marca
Crie uma função ordenarPorMarca($carros) que receba todos os carros em um array e
retorne-os organizados em ordem alfabética pela marca.*/ 
function ordenarPorMarca($carros){
    usort($carros,     function($a, $b){
        return strcmp($a["marca"], $b["marca"]);
    });
    return $carros;


}
$carros = ordenarPorMarca($carros);
foreach ( $carros as $carro ){
    echo "{$carro["modelo"]}\n";
}