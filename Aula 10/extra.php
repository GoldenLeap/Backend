<?php
    namespace Extras;
    //Crie 3 Interfaces:
    // Movel → Método mover()
    // Abastecivel → Método abastecer($quantidade)
    // Manutenivel → Método fazerManutencao()
    interface Movel{
        public function mover();
    }
    interface Abastecivel{
        public function abastecer($quant);
    }

    interface Manutenivel {
        public function fazerManutencao();
    }
    // Crie as classes:
    // Carro → Deve implementar Movel e Abastecivel.
    // • mover() imprime que o carro está se movimentando.
    // • abastecer($quantidade) imprime a quantidade abastecida.
    class Carro implements Movel, Abastecivel{
        public function mover(){
            echo "O carro está se movendo.\n";
        }
        public function abastecer($qnt){
            echo "Foram abastecidos $qnt litros de gasolina do carro.\n";
        }
    }
    
    // Bicicleta → Deve implementar Movel e Manutenivel.
    // • mover() imprime que a bicicleta está pedalando.
    // • fazerManutencao() imprime que a bicicleta foi lubrificada.
    class Bicicleta implements Movel, Manutenivel{
        public function mover(){
            echo "A bicicleta está pedalando.\n";
        }
        public function fazerManutencao(){
            echo "A bicicleta foi lubrificada.\n";
        }
    }
    // Onibus → Deve implementar Movel, Abastecivel e Manutenivel.
    // • mover() imprime que o ônibus está transportando passageiros.
    // • abastecer($quantidade) imprime a quantidade abastecida.
    // • fazerManutencao() imprime que o ônibus está passando por revisão.
    class Onibus implements Movel, Abastecivel, Manutenivel{
        public function mover(){
            echo "O onibus está transportando passageiros.\n";
        }
        public function abastecer($qnt){
            echo "Foram abastecidos $qnt litros de diesel do onibus.\n";
        }
        public function fazerManutencao(){
            echo "O onibus está passando por revisão.\n";
        }
    }


    $carro1 = new Carro();
    $bicicleta1 = new Bicicleta();
    $onibus1 =  new Onibus();

    $carro1->abastecer(10);
    $carro1->mover();

    $bicicleta1->mover();
    $bicicleta1->fazerManutencao();

    $onibus1->abastecer(12);
    $onibus1->fazerManutencao();
    $onibus1->mover();