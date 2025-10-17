<?php

// Cenário 6 – Leia o enunciado do problema
// "Um sistema de cinema deve permitir que clientes comprem ingressos para
// sessões de filmes."


class SistemaDeCinema {
    public function exibirSessoes() {
        echo "Exibindo todas as sessões disponíveis.<br>";
    }

    public function venderIngresso(Ingresso $ingresso) {
        echo "Ingresso vendido com sucesso.<br>";
    }
}

class Cliente {
    public function comprarIngresso(Sessao $sessao) {
        $sessao->reservarAssento();
        echo "Cliente comprou ingresso.<br>";
    }
}

class Filme {
    public function getDetalhes() {
        echo "Detalhes do filme exibidos.<br>";
    }
}

class Sessao {
    public function reservarAssento() {
        echo "Assento reservado.<br>";
    }

    public function liberarAssento() {
        echo "Assento liberado.<br>";
    }
}

class Ingresso {
    public function validar() {
        echo "Ingresso validado.<br>";
    }
}

class Sala {
    public function verificarDisponibilidade() {
        echo "Verificando disponibilidade da sala.<br>";
    }
}
?>
