<?php
    require_once __DIR__ . '/../controller/livroController.php';
    $controller = new LivroController();
    $act        = $_GET["action"] ?? '';
    switch ($act) {
        case 'add':
            $controller->criar(
                trim($_POST['titulo']),
                trim($_POST['autor']),
                trim($_POST['ano']),
                trim($_POST['genero']),
                trim($_POST['quantidade']),
            );
            break;
    }
    $livros = $controller->ler();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livraria</title>
</head>
<body>
    <h1>
        Cadastrar Livro
    </h1>
    <form action="?action=add" method="post">
        <label for="titulo">Titulo do Livro</label>
        <input type="text" name="titulo" id="" required>

        <label for="autor">Autor</label>
        <input type="text" name="autor" id="" required>
        <label for="ano">Ano de Publicação</label>
        <input type="number" min=1000 name="ano" id="" required>
        <label for="genero">Genero literario</label>
        <input type="text" name="genero" id="">
        <label for="quantidade">Quantidade Disponivel</label>
        <input type="number" min=0 name="quantidade" id="" required>
        <button type="submit">Enviar</button>
    </form>
    <h1>Lista de livros</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Autor</th>
                <th>Ano de Publicação</th>
                <th>Genero</th>
                <th>Quantidade</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($livros as $livro):?>
                <tr>
                    <td><?= $livro['titulo'] ?></td>
                    <td><?= $livro['titulo'] ?></td>
                    <td><?= $livro['autor'] ?></td>
                    <td><?= $livro['ano'] ?></td>
                    <td><?= $livro['genero'] ?></td>
                    <td><?= $livro['quantidade'] ?></td>
                </tr>    
            <?php endforeach;?>
        </tbody>
    </table>
</body>
</html>
