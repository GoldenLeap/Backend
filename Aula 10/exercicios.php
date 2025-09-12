<?php
// Exercício 1 – Formas Geométricas
// Crie uma interface `Forma` com o método `calcularArea()`. Implemente as classes:
// - `Quadrado` (lado),
// - `Retangulo` (base e altura),
// - `Circulo` (raio).
interface Forma{
    public function calcularArea($lado);
}
class Quadrado implements Forma{
    public function calcularArea($lado){
        return $lado * $lado;
    }
}
class Retangulo implements Forma{
    public function calcularArea($lado){
        $altura = (float)readline("Insira a altura do retangulo: ");
        return $lado * $altura;
    }
}
class Circulo implements Forma{
    public function calcularArea($raio){
        $raio = (float)$raio;
        $area = pow($raio, 2) * M_PI;
        return round($area, 2);
    }
}
$quadrado = new Quadrado();
$circulo = new Circulo();
$retangulo = new Retangulo();

echo "Área do Quadrado: " . $quadrado->calcularArea((float)readline("Lado do quadrado: ")) . "cm²\n";
echo "Área do Circulo: " . $circulo->calcularArea((float)readline("Digite o raio do circulo: ")) . "cm²\n";
echo "Área do Retangulo: " . $retangulo->calcularArea((float)readline("Lado do Retangulo: ")). "cm²\n";




// Exercício 2 – Animais e Sons
// Crie uma classe pai `Animal` com o método `fazerSom()`. Implemente as classes:
// - `Cachorro` → "Au au!",
// - `Gato` → "Miau!",
// - `Vaca` → "Muuu!".



abstract class Animal{
    public function fazerSom(){
    }
}

class Cachorro extends Animal{
    public function fazerSom(){
        echo "Cachorro -> Au au\n";
    }
}
class Gato extends Animal{
    public function fazerSom(){
        echo "Gato -> Miau!\n";
    }
}
class Vaca extends Animal{
    public function fazerSom(){
        echo "Vaca -> Muuu!\n";
    }
}

$cachorro1 = new Cachorro();
$gato1 = new Gato();
$vaca1     = new Vaca();

$cachorro1->fazerSom();
$gato1->fazerSom();
$vaca1->fazerSom();

// Exercício 3 – Meios de Transporte
// Crie uma classe abstrata `Transporte` com o método `mover()`. Implemente as classes:

// - `Carro` → "O carro está andando na estrada",
// - `Barco` → "O barco está navegando no mar",
// - `Avião` → "O avião está voando no céu".
// - `Elevador` → "O Elevador está correndo pelo no prédio".

abstract Class Transporte{
    function mover(){

    }
}
class Carro extends Transporte{
    function mover(){
        echo "O Carro está andando na estrada\n";
    }
}
class Barco extends Transporte{
    function mover(){
        echo "O barco está navegando no mar\n";
    }
}
class Aviao extends Transporte{
    function mover(){
        echo "O avião está voando no céu\n";
    }
}

class Elevador extends Transporte{
    function mover(){
        echo "O elevador está correndo pelo prédio\n";
    }
}

$carro1  = new Carro();
$carro1->mover();
$barco1 = new Barco();
$barco1->mover();
$aviao1 = new Aviao();
$aviao1->mover();
$elevador1 = new Elevador();
$elevador1->mover();


// Exercício 4 – Notificações
// Crie duas classes:
// - `Email` com o método `enviar()`, que retorna "Enviando email...",
// - `Sms` com o método `enviar()`, que retorna "Enviando SMS...".
// Depois crie uma função `notificar($meio)` que aceite qualquer objeto com `enviar()` e faça a
// chamada. Teste com ambos os objetos.

interface Comunicacao{
    public function enviar();
}

class Email implements Comunicacao{
    function enviar(){
        echo "Enviando email...\n";
    }
}
class Sms implements Comunicacao{
    function enviar(){
        echo "Enviando sms...\n";
    }
}

$sms1 = new Sms();
$email1 = new Email();

function notificar(Comunicacao $meio){
    $meio->enviar();
}

notificar($sms1);
notificar($email1);

// Exercício 5 – Calculadora com Sobrecarga Simulada
// Crie uma classe `Calculadora` com o método `somar()`.
// - Se receber 2 números, retorna a soma dos dois.
// - Se receber 3 números, retorna a soma dos três.

class Calculadora{
    function somar(...$nums){
        $total = 0;
        foreach ($nums as $num) {
            $total += $num;
        }
        return $total;
    }
}

$calc = new Calculadora();
$tot = $calc->somar(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
echo $tot;