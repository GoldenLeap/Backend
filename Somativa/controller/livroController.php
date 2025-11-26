<?php
require_once __DIR__ . "/../models/LivroDAO.php";
require_once __DIR__ . "/../models/Livro.php";


class LivroController{
    private $dao;
    public function __construct(){
        $this->dao = new LivroDAO();
        
    }

    public function criar($titulo, $autor,$ano, $genero, $qtd_livro){
        $livro = new Livro($titulo, $autor, $ano, $genero, $qtd_livro );
        $this->dao->criarLivro($livro);
        header("location: /");
    }
    public function ler(){
        return $this->dao->lerLivro();
    }

    public function atualizar($id, $titulo, $autor, $ano, $genero, $qtd){
        $this->dao->atualizarLivro($id, $titulo, $autor, $genero, $ano, $qtd);
    }
    public function buscarTitulo($titulo){
        $this->dao->buscarPorTitulo($titulo);
    }
    public function deletar($id){
        $this->dao->excluirLivro($id);
        header("location: /");

    }
}