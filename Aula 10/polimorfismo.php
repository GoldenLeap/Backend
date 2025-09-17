<?php
namespace Polimorfismo;
//Polimorfismo:
// O termo Polimorfismo significa "Várias formas". Associando isso a Programação Orientada a Objetos,
// O conceito se trata de várias classes e suas instancias respondendo a um mesmo método de formas diferentes
// No exemplo da Interface da Aula_09, temos um metodo CalcularArea() que responde de forma diferente
// à classe Quadrado, à classe Pentágono e a classe Círculo. Isso quer dizer que a função é a mesma - calcular a área de forma geometrica
// mas a operação muda de acordo com a figura.

// Crie um metodo chamado "mover()", aonde ele responde de varias formas diferentes, para as classes: Carro, avião, barco e elevador;

interface Veiculo{
    public function mover();
}

class Carro implements Veiculo{
    function mover(){
        echo "O carro está andando\n";
    }
}
class Aviao implements Veiculo{
    function mover(){
        echo "O avião está voando\n";
    }
}
class Barco implements Veiculo{
    function mover(){
        echo "O barco está navegando\n";
    }
}
class Elevador implements Veiculo{
    function mover(){
        $opt = rand(0, 1);
        $escolha = $opt? "subindo": "descendo";
        echo "O elevador está " . $escolha."\n"; 
    }
}

$carro1 = new Carro();
$carro2 = new Carro();
$aviao1 = new Aviao();
$aviao2 = new Aviao();
$barco1 = new Barco();
$barco2 = new Barco();
$elevador1  = new Elevador();
$carro1->mover();
$carro2->mover();
$aviao1->mover();
$aviao2->mover();
$barco1->mover();
$barco2->mover();
$elevador1->mover();

