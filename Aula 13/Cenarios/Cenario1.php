<?php

// Cenário 1 – Viagem pelo Mundo
// Um grupo de turistas vai visitar o Japão, o Brasil e o Acre. Em cada lugar da
// Terra, eles poderão comer comidas típicas e nadar em rios ou praias.


class Turista {
    public function visitar(Localidade $localidade) {
        echo "O turista está visitando " . $localidade->getNome() . "<br>";
    }

    public function comer(Comida $comida) {
        echo "O turista está comendo " . $comida->getDescricao() . "<br>";
    }

    public function nadar(CorpoDagua $corpoDagua) {
        echo "O turista está nadando em um " . $corpoDagua->getTipo() . "<br>";
    }
}

class Localidade {
    private $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function informarAtividades() {
        echo "Esta localidade possui várias atividades turísticas.<br>";
    }
}

abstract class Atividade {
    abstract public function executar();
}

class Comida {
    private $descricao;

    public function __construct($descricao) {
        $this->descricao = $descricao;
    }

    public function getDescricao() {
        return $this->descricao;
    }
}

class CorpoDagua {
    private $tipo;

    public function __construct($tipo) {
        $this->tipo = $tipo;
    }

    public function getTipo() {
        return $this->tipo;
    }
}
?>
