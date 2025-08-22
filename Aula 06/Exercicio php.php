<?php


// Crie uma classe "Produtos" com ao menos 4 atributos sem a utilização de um construtor
class Produtos{
    public $nome;
    public $categoria;
    public $qtd;
    public $valor;
}

// Crie ao menos 3 instancias dessa classe
$objeto1 = new Produtos();

$objeto1->nome = "iPhone 14";
$objeto1->categoria = "Smartphone";
$objeto1->qtd = 25;
$objeto1->valor = 3800.00;

$objeto2 = new Produtos();
$objeto2->nome = "Dell Inspiron 15";
$objeto2->categoria = "Notebook";
$objeto2->qtd = 15;
$objeto2->valor = 5009.00;

$objeto3 = new Produtos();
$objeto3->nome = "Philco Wave PFO01BTP - 56605001";
$objeto3->categoria = "Fones de ouvido Bluetooth";
$objeto3->qtd = 30;
$objeto3->valor = 138.99;
