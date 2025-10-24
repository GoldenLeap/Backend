<?php

// Crie uma classe 'produtos' com os atributos: código, nome e preço. Após isso faça a ProdutosDAO
// Para a utilização dos metodos CRUD. Por ultimo faça um index.php para testar a criação e manipulação dos objetos. 
// Implemente a persistencia de dados com o arquivo

// Crie 8 objetos: Tomate, Maçã, Queijo brie,
// iogurte grego, Guaraná Jesus, Bolacha Bono, Desinfetante Urca e Prestobarba Bic. Determine
// os preços por conta e os códigos de forma aleatória.

// Modifique o Desinfetante Urca para Desinfetante Barbarex; E ao menos 2 valores dos preços que você determinou

// Apague a maçã e o tomate dos produtos (odiamos coisa saudavel).

class Produto
{
    private $codigo;
    private $nome;
    private $preco;
    public function __construct($codigo, $nome, $preco){
        $this->setCodigo($codigo);
        $this->setNome($nome);
        $this->setPreco($preco);
    }
    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function setPreco($preco) {
        $this->preco = $preco;
    }
    public function getCodigo() {
        return $this->codigo;
    }  
    public function getNome() {
        return $this->nome;
    }
    public function getPreco() {
        return $this->preco;
    }
}
