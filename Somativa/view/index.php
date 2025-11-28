<?php
    session_start();
    $msg = $_SESSION["msg"] ?? '';
    if ($msg) {
        unset($_SESSION['msg']);
    }
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
        case 'delete':
            $controller->deletar($_GET["id"]);
            break;
        case "edit":
            if (isset($_GET["id"])) {
                $livroEdit = $controller->buscarPorId($_GET['id']);
            } else {
                header('location: /');
            }
            break;
        case "procEdit":
            $id     = $_POST["id"] ?? "";
            $titulo = $_POST["tituloEdit"] ?? "";
            $autor  = $_POST["autorEdit"] ?? "";
            $ano    = $_POST["anoEdit"] ?? "";
            $genero = $_POST["generoEdit"] ?? "";
            $qtd    = $_POST["quantidadeEdit"] ?? "";
            $controller->atualizar($id, $titulo, $autor, $ano, $genero, $qtd);
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
    <link rel="stylesheet" href="/style.css">
</head>
<body>
<div id="toast" class="toast <?php echo $msg ? 'show' : ''?>">
    <p><?php echo htmlspecialchars($msg)?></p>
</div>

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

    <h1>Lista de Livros</h1>


<div class="search-container">
    <form method="get">
        <label for="titulo">Buscar por Título:</label>
        <input type="text" name="titulo" id="buscar" placeholder="Digite o título do livro" value="<?php echo $_GET['titulo'] ?? ''; ?>">
        <button type="submit">🔎 Buscar</button>
    </form>

    <?php if (isset($_GET['titulo']) && ! empty($_GET['titulo'])): ?>
        <div class="filter-chip">
            <span><?php echo htmlspecialchars($_GET['titulo']); ?></span>
            <a href="?"><span class="clear-filter">❌</span></a>
        </div>
    <?php endif; ?>
</div>



<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Autor</th>
            <th>Ano de Publicação</th>
            <th>Gênero</th>
            <th>Quantidade</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        <?php if (isset($_GET['titulo']) && $_GET['titulo'] !== null) {
                $livros = $controller->buscarTitulo($_GET['titulo']);
            }
        ?>
        <?php foreach ($livros as $i => $livro): ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $livro->getTitulo() ?></td>
                <td><?php echo $livro->getAutor() ?></td>
                <td><?php echo $livro->getAno() ?></td>
                <td><?php echo $livro->getGenero() ?></td>
                <td><?php echo $livro->getQtde() ?></td>
                <td>
                    <a href="?action=edit&id=<?php echo $i ?>" class="btn-edit">Editar</a>
                    <a href="?action=delete&id=<?php echo $i ?>" class="btn-delete">Deletar</a>
                </td>
            </tr>

        <?php endforeach; ?>
    </tbody>
</table>

    <div class="<?php echo(isset($_GET["action"]) && $_GET["action"] == 'edit' && isset($_GET["id"])) ? '' : 'hidden' ?>">
        <h1>Editar Livro</h1>
        <form action="?action=procEdit" method="post">
            <label for="id">ID do Livro</label>
            <input type="text" readonly value="<?php echo $_GET['id'] ?? '' ?>" name="id">
            <label for="tituloEdit">Titulo do Livro</label>
            <input type="text" name="tituloEdit" id="" value="<?php echo $livroEdit->getTitulo() ?>" required>
            <label for="autorEdit">Autor</label>
            <input type="text" name="autorEdit" value="<?php echo $livroEdit->getAutor() ?>" id="" required>
            <label for="anoEdit">Ano de Publicação</label>
            <input type="number" min=1000 name="anoEdit" value="<?php echo $livroEdit->getAno() ?>" id="" required>
            <label for="generoEdit">Genero literario</label>
            <input type="text" name="generoEdit" value="<?php echo $livroEdit->getGenero() ?>" id="">
            <label for="quantidade">Quantidade Disponivel</label>
            <input type="number" min=0 name="quantidadeEdit" value="<?php echo $livroEdit->getQtde() ?>" id="" required>
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>
