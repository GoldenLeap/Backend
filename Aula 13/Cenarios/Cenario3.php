<?php

// Cenário 3 – Fantasia e Destino
// John Snow, Papai Smurf, Deadpool e Dexter estão em uma jornada. Durante o
// caminho, começa a chover, e eles precisam amar uns aos outros para superar as
// dificuldades. No fim da jornada, eles celebram ao comer juntos.


class Personagem {
    public function seguirJornada(Jornada $jornada) {
        $jornada->avancar();
    }

    public function enfrentarDesafio(Dificuldade $dificuldade) {
        $dificuldade->superar();
    }

    public function celebrar(Refeicao $refeicao) {
        $refeicao->servir();
    }
}

class Jornada {
    public function avancar() {
        echo "A jornada está avançando.<br>";
    }
}

class Clima {
    public function mudar($novoClima) {
        echo "O clima mudou para: $novoClima<br>";
    }
}

class Dificuldade {
    public function superar() {
        echo "A dificuldade foi superada.<br>";
    }
}

class Refeicao {
    public function servir() {
        echo "A refeição foi servida.<br>";
    }
}
?>
