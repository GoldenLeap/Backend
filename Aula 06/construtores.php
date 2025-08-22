<?php

class Produtos{
    public $nome;
    public $categoria;
    public $fornecedor;
    public $qtde_estoque;
    public function __construct($nome, $categoria, $fornecedor, $qtde_estoque){
        $this->nome = $nome;
        $this->categoria = $categoria;
        $this->fornecedor = $fornecedor;
        $this->qtde_estoque = $qtde_estoque;
    }

    public function poduto_vendido($qtde_vendida){
        $this->qtde_estoque -= $qtde_vendida;
        if($this->qtde_estoque <0){
            $this->qtde_estoque = 0;
        }     
    }
}


// Criação de objetos sem um constructor
$bolacha1 = new Produtos();
$bolacha1->nome = "Nikito";
$bolacha1->categoria = "Doces";
$bolacha1->fornecedor = "Vitarella";
$bolacha1->qtde_estoque = 220;

$feijao = new Produtos();
$feijao->nome = "Oliron";
$feijao->categoria = "Mantimentos";
$feijao->fornecedor = "Reserva nobre";
$feijao->qtde_estoque = 123;

// Criando um objeto com um constructor
$feijao = new Produtos("Oliron", "Mantmentos", "Reserva Nobre", 123);
$bolacha1 = new Produtos("Nikito", "Doces", "Vitarella", 220);
