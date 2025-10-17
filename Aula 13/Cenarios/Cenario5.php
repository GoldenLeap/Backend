<?php

// Cenário 5 – Analise o problema com linguagem natural
// "Um sistema de biblioteca deve permitir que usuários (alunos e professores)
// façam empréstimos de livros e revistas."


class SistemaDeBiblioteca {
    public function registrarEmprestimo(Emprestimo $emprestimo) {
        echo "Empréstimo registrado com sucesso.<br>";
    }

    public function registrarDevolucao(Emprestimo $emprestimo) {
        echo "Devolução registrada com sucesso.<br>";
    }
}

class Usuario {
    public function solicitarEmprestimo(ItemBibliotecario $item) {
        $item->emprestar();
    }

    public function devolverItem(ItemBibliotecario $item) {
        $item->devolver();
    }
}

abstract class ItemBibliotecario {
    abstract public function emprestar();
    abstract public function devolver();
}

class Livro extends ItemBibliotecario {
    public function emprestar() {
        echo "Livro emprestado.<br>";
    }

    public function devolver() {
        echo "Livro devolvido.<br>";
    }
}

class Revista extends ItemBibliotecario {
    public function emprestar() {
        echo "Revista emprestada.<br>";
    }

    public function devolver() {
        echo "Revista devolvida.<br>";
    }
}

class Emprestimo {
    public function finalizar() {
        echo "Empréstimo finalizado.<br>";
    }
}
?>
