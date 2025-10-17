<?php

// Cenário 2 – Heróis e Personagens
// O Batman, o Superman e o Homem-Aranha estão em uma missão. Eles precisam
// fazer treinamentos especiais no Cotil e, depois, irão ao shopping para doar
// brinquedos às crianças.


class Heroi {
    public function treinar(LocalDeTreinamento $local) {
        echo "O herói está treinando em " . $local->getNome() . "<br>";
    }

    public function realizarMissao(Missao $missao) {
        $missao->iniciar();
        echo "O herói está realizando a missão.<br>";
        $missao->finalizar();
    }

    public function doarBrinquedo(Boneco $brinquedo, Crianca $crianca) {
        echo "O herói doou um " . $brinquedo->getTipo() . " para uma criança.<br>";
        $crianca->receberBrinquedo($brinquedo);
    }
}

class Missao {
    public function iniciar() {
        echo "Missão iniciada.<br>";
    }

    public function finalizar() {
        echo "Missão finalizada.<br>";
    }
}

class LocalDeTreinamento {
    private $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function oferecerTreinamento() {
        echo "Treinamento oferecido com sucesso.<br>";
    }
}

class Shopping {
    public function receberDoacao() {
        echo "O shopping recebeu doações.<br>";
    }
}

class Boneco {
    private $tipo;

    public function __construct($tipo) {
        $this->tipo = $tipo;
    }

    public function getTipo() {
        return $this->tipo;
    }
}

class Crianca {
    public function receberBrinquedo(Boneco $brinquedo) {
        echo "A criança recebeu um brinquedo do tipo " . $brinquedo->getTipo() . "<br>";
    }
}
?>
