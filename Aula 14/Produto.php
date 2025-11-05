<?php
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
