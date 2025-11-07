<?php
    require_once __DIR__ . "/../models/Bebida.php";
    require_once __DIR__ . "/../models/BebidaDAO.php";
    require_once __DIR__ . "/../controllers/bebidaController.php";
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
            <input type="number" name="volume" min="0" id="" required>
            <label for="qtde">Quantidade da bebida</label>
            <input type="number" name="qtde" min="0" id="" required>
            <label for="valor">Valor da bebida</label>
            <input type="number" name="valor" min=0 id="" required>
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
                        <td><?php echo $bebida->getNome()?></td>
                        <td><?php echo $bebida->getCategoria()?></td>
                        <td><?php echo $bebida->getVolume()?></td>
                        <td><?php echo $bebida->getValor()?></td>
                        <td><?php echo $bebida->getQtde()?></td>
                        <td class="acoes"><a class="btn" href="/?action=delete&name=<?php echo $bebida->getNome();?>">Deletar</a>
                        <a class="btn" href="/?action=edit&name=<?php echo $bebida->getNome();?>">Editar</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>