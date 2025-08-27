<?php
/*1. Crie uma classe "Moto" com ao menos 4 atributos sem a
utilização de um construtor.
*/

class Moto{
    public $modelo;
    public $ano;
    public $marca;
    public $revisao;
}

//2. Crie ao menos 3 objetos para essa classe
$moto1 = new Moto();
$moto1->modelo = "";
$moto1->ano = 2020;
$moto1->marca = "";
$moto1->revisao = false;

$moto2 = new Moto();
$moto2->modelo = "";
$moto2->ano = 2023;
$moto2->marca = "";
$moto2->revisao = false;

$moto3 = new Moto();
$moto3->modelo = "";
$moto3->ano = 2024;
$moto3->marca = "";
$moto3->revisao = false;

/*3. Crie 3 construtores sendo:

• 1° Construtor: Recebe 3 parâmetros sendo eles $dia, $mes e $ano;
• 2° Construtor: Recebe 7 parâmetros sendo eles: $nome, $idade, $cpf,
$telefone, $endereco, $estado_civil e $sexo;
• 3° Construtor: Recebe 5 parâmetros sendo eles: $marca, $nome,
$categoria, $data_fabricacao e $data_venda;

OBS: Escreva o exercício 3 em forma de comentário.*/

// Exercicio 3
/*
    class Classe{
        public $dia;
        public $mes;
        public $ano;
        
        public function __construct($dia, $mes, $ano){
            $this->dia = $dia;
            $this->mes = $mes;
            $this->ano = $ano;
        }

    }
        
    class Classe2{
        public $nome;
        public $idade;
        public $cpf;
        public $telefone;
        public $endereco;
        public $estado_civil;
        public $sexo
        
        public function __construct($nome, $idade, $cpf, $telefone, $endereco, $estado_civil, $sexo){
            $this->nome = $nome;
            $this->idade = $idade;
            $this->cpf = $cpf;
            $this->telefone = $telefone;
            $this->endereco = $enderco;
            $this->estado_civil = $estado_civil;
            $this->sexo = $sexo
        }

    }

    class Classe3{
        public $marca;
        public $nome;
        public $categoria;
        public $data_fabricacao;
        public $data_venda;
        public $estado_civil;
        public $sexo
        
        public function __construct($marca, $nome, $categoria, $data_fabricacao, $data_venda){
            $this->marca = $marca;
            $this->nome = $nome;
            $this->categoria = $categoria;
            $this->data_fabricacao = $data_fabricacao;
            $this->data_venda = $data_venda;

        }

    }


*/