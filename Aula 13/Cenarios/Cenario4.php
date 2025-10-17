<?php

// Cenário 4 – Ciclo da Vida
// Na Terra, pessoas podem engravidar, nascer, crescer, fazer escolhas e até doar
// sangue para ajudar outras.


class Pessoa {
    public function engravidar() {
        echo "Uma pessoa engravidou.<br>";
    }

    public function nascer() {
        echo "Uma nova pessoa nasceu.<br>";
    }

    public function crescer() {
        echo "A pessoa está crescendo.<br>";
    }

    public function fazerEscolha(Escolha $escolha) {
        $escolha->executar();
    }

    public function doarSangue(BancoDeSangue $banco) {
        $banco->receberDoacao();
    }
}

class Escolha {
    public function executar() {
        echo "Uma escolha foi feita.<br>";
    }
}

class BancoDeSangue {
    public function receberDoacao() {
        echo "O banco de sangue recebeu uma doação.<br>";
    }
}
?>
