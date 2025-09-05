<?php

    // Modificadores de acesso
    // Existem 3 tipos: Public, Private, Protected

    // Public NomedoAtributo: atributos publicos - Podem ser acessados fora da classe

    // Private NomedoAtributo: Atributos privados - Só podem ser acessados dentro da classe

    // Protected NomedoAtributo: Atributos protegidos - atributos protegidos para acesso somente da classe e de suas classes filhas

    // Pacotes: sintaxe logo no inicio do codigo, que atribui aonde os arquivos pertencem, ou seja, o caminho da pasta em que ele está contido. Exemplo

    // namespace Aula 09;

    // Caso tnham mais arquivos que formam o backend de uma página web e possuem a mesma raiz, o namespace será o mesmo

    namespace Aula_09;
    
    interface Pagamento{
        public function pagar($valor);
    }


    class CartaoDeCredito implements Pagamento{
        public function pagar($valor){
            echo "Pagamento realizado com cartão de crédito, valor: $valor\n";
        }
    }

    // 1. Criando uma interface Simples 
    // Crie uma interface chamada forma que obrigue qualquer classe a ter um metodo calcularArea()
    // Depois, crie as classes Quadrado e circulo que implementam a interface.

    // Quadrado deve receber o lado e calcular a area

    // Circulo deve receber o raio e calcular a área

    interface Forma {
        public function calcularArea($x);
    }

    class Circulo implements Forma{
        public function calcularArea($raio){
            $raio = (float)$raio;
            $area = pow($raio, 2) * M_PI;
            return round($area, 2);
        }
    }
    class Quadrado implements Forma{
        public function calcularArea($lado){
            return pow($lado,2);
        }
    }

    $quadrado = new Quadrado();
    $circulo = new Circulo();

    echo "Área do quadrado: ". $quadrado->calcularArea((float)readline("Lado do quadrado: "))."cm²\n";
    echo "Área do circulo: " . $circulo->calcularArea((float)readline("Digite o raio do circulo: ")) . "cm²\n";