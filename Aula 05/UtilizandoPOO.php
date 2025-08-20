<?php
class Carro{
    public $marca;
    public $modelo;
    public $ano;
    public $revisao;
    public $n_donos;
    
    public function __construct($marca,$modelo,$ano,$revisao,$n_donos){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->revisao = $revisao;
        $this->n_donos = $n_donos;
    }
}

$carro1 = new Carro("Porsche", "911", 2020, false, 3);
$carro2 = new Carro("Mitsubishi", "Lancer", 1945, true, 1);


// Exercicio: Crie mais 4 novos objetos para a classe Carro.
$carro3 = new Carro("Fiat","Argo", 2023, false, 2);
$carro4 = new Carro("Ford", "Mustang", 2020, true, 3);
$carro5 = new Carro("Honda", "Civic", 2017, false, 1);
