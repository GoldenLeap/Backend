<?php

class AlunoDAO { // DAO -> Data Access Object
    private $alunos = []; // Array para armazenar temporariamente dos objetos e seus atributos, antes de mudar para o banco de dados

    public function criarAluno(Aluno $aluno){ // Metodo Create --> criar um novo objeto (aluno.) ou adicionar um aluno no db
        $this->alunos[$aluno->getId()]= $aluno;
    }
    public function lerAluno(){ // Metodo Read --> ler informações do objeto (aluno no caso)
        return $this->alunos;
    }
    public function atualizarAluno($id, $novoNome, $novoCurso){
        if (isset($this->alunos[$id])){
            $this->alunos[$id]->setNome($novoNome);
            $this->alunos[$id]->setCurso($novoCurso);
        }
    }
    public function excluirAluno($id){
        unset($this->alunos[$id]);
    }
}