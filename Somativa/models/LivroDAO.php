<?php
require_once __DIR__ . "/Livro.php";
require_once __DIR__ . "/Connect.php";

class LivroDAO
{
    private $conn;
    public function __construct()
    {
        $this->conn = Connect::getInstance();

        $this->conn->exec(
            "CREATE TABLE IF NOT EXISTS livros(
        id INT AUTO_INCREMENT PRIMARY KEY,
        titulo VARCHAR(200) NOT NULL,
        autor varchar(100) NOT NULL,
        genero VARCHAR(20) NOT NULL,
        ano INT NOT NULL,
        quantidade INT NOT NULL
        )");
    }
    public function criarLivro(Livro $livro)
    {
        $stmt = $this->conn->prepare("INSERT INTO livros(titulo, autor, genero, ano, quantidade)
        VALUES (:titulo, :autor, :genero, :ano, :quantidade)");
        $stmt->execute([
            ':titulo'     => $livro->getTitulo(),
            ':autor'      => $livro->getAutor(),
            ':genero'     => $livro->getGenero(),
            ":ano"        => $livro->getAno(),
            ':quantidade' => $livro->getQtde(),
        ]);
    }

    public function lerLivro()
    {
        $stmt   = $this->conn->query("SELECT * FROM livros");
        $result = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result[$row['id']] = new Livro(
                $row['titulo'],
                $row['autor'],
                $row['ano'],
                $row['genero'],
                $row['quantidade']
            );
        }
        return $result;
    }

    public function atualizarLivro($id, $novoTitulo, $novoAutor, $novoGenero, $novoAno, $novaQuantidade)
    {
        $stmt = $this->conn->prepare(
            "UPDATE livros
            SET titulo=:newTitulo,
            autor=:newAutor,
            genero=:newGenero,
            ano=:newAno,

            quantidade = :newQuantidade
            WHERE id = :id;
            "
        );
        $stmt->execute([
            ':newTitulo'     => $novoTitulo,
            ':newAutor'      => $novoAutor,
            ':newGenero'     => $novoGenero,
            ':newAno'        => $novoAno,
            ':newQuantidade' => $novaQuantidade,
            ':id' => "$id"]
        );
    }
    public function excluirLivro($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM livros WHERE id=:id");
        $stmt->execute([':id' => $id]);
    }
    public function buscarPorTitulo($titulo)
    {
        $result = [];
        $stmt   = $this->conn->prepare("SELECT * FROM Livros WHERE titulo LIKE :titulo");
        $stmt->execute([":titulo" => "%" . $titulo . "%"]);

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result[$row['id']] = new Livro(
                $row['titulo'],
                $row['autor'],
                $row['ano'],
                $row['genero'],
                $row['quantidade']
            );
        }

        return $result;
    }

    public function buscarPorId($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM livros WHERE id=:id");
        $stmt->execute([":id" => $id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            return new Livro(
                $row['titulo'],
                $row['autor'],
                $row['ano'],
                $row['genero'],
                $row['quantidade']
            );
        }
        return null;
    }

}
