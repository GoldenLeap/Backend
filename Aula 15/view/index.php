<?php
require_once(__DIR__ . "/../models/Bebida.php");
require_once(__DIR__ . "/../models/BebidaDAO.php");
require_once(__DIR__ . "/../controllers/bebidaController.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bebidas</title>
    <link rel="stylesheet" href='./style.css'>

</head>

<body>
    <div class="bebidas">
        <h1>Adicionar bebidas</h1>
        <form action="/?action=add" method="post">
            <label for="nome">Nome da bebida</label>
            <input type="text" name="nome" id="" required>
            <label for="categoria">Categoria da bebida</label>
            <input type="text" name="categoria" id="" required>
            <label for="volume">Volume da bebida</label>
            <input type="number" name="volume" id="" required>
            <label for="qtde">Quantidade da bebida</label>
            <input type="number" name="qtde" id="" required>
            <label for="valor">Valor da bebida</label>
            <input type="number" name="valor" id="" required>
            <input type="submit" value="Adicionar bebida">
        </form>
    </div>
    <div class="lista">
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Categoria</th>
                    <th>Volume</th>
                    <th>Valor</th>
                    <th>Quantidade</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($bebidas as $bebida): ?>
                    <tr>
                        <td><?= $bebida->getNome() ?></td>
                        <td><?= $bebida->getCategoria() ?></td>
                        <td><?= $bebida->getVolume() ?></td>
                        <td><?= $bebida->getValor() ?></td>
                        <td><?= $bebida->getQtde() ?></td>
                        <td><a class="btn" href="/?action=delete&name=<?=$bebida->getNome();?>">Deletar</a>
                        <a class="btn" href="/?action=edit&name=<?=$bebida->getNome();?>">Editar</a></td> 
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>