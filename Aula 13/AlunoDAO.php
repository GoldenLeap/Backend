<?php

class AlunoDAO
{ // DAO -> Data Access Object
    private $alunos = [];
    private $arquivo = "alunos.json"; // Arquivo json para armazenar dados 

    public function __construct()
    {
        if (file_exists($this->arquivo)) {
            // Lê o conteudo do arquivo caso ele já exista
            $conteudo = file_get_contents($this->arquivo);
            $dados = json_decode($conteudo, true); // Converte um JSON em array associativo
            if ($dados) {
                foreach ($dados as $id => $info) {
                    $this->alunos[$id] = new Aluno(
                        $info['id'],
                        $info['nome'],
                        $info['curso']
                    );
                }
            }
        }
    }
    public function criarAluno(Aluno $aluno)
    { // Metodo Create --> criar um novo objeto (aluno.) ou adicionar um aluno no db
        $this->alunos[$aluno->getId()] = $aluno;
        $this->salvarInfo();
    }
    public function lerAluno()
    { // Metodo Read --> ler informações do objeto (aluno no caso)
        return $this->alunos;
    }
    public function atualizarAluno($id, $novoNome, $novoCurso)
    { // Update
        if (isset($this->alunos[$id])) {
            $this->alunos[$id]->setNome($novoNome);
            $this->alunos[$id]->setCurso($novoCurso);
            $this->salvarInfo();
        }
    }
    public function excluirAluno($id)
    { // Delete
        unset($this->alunos[$id]);
        $this->salvarInfo();
    }

    private function salvarInfo()
    {
        $dados = [];
        // Transforma os objetos em arrays
        foreach ($this->alunos as $id => $alunos) {
            $dados[$id] = [
                $id = $alunos->getId(),
                $nome = $alunos->getNome(),
                $curso = $alunos->getCurso(),
            ];
        }

        // Converte para JSON formatado e grava o arquivo
        file_put_contents($this->arquivo, json_encode($dados), JSON_PRETTY_PRINT);
    }
}