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
            <select required>
                <?php foreach ($categorias as $categoria):?>
                    <option value="<?=$categoria?>"><?= $categoria['nome_categoria'] ?></option>
                <?php endforeach;?>
            </select>
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
                        <td><?php echo $bebida->getNome()?></td>
                        <td><?php echo $bebida->getCategoria()?></td>
                        <td><?php echo $bebida->getVolume()?></td>
                        <td><?php echo $bebida->getValor()?></td>
                        <td><?php echo $bebida->getQtde()?></td>
                        <td>
                            <a href="?action=edit">Editar</a>
                            <a href="?action=delete">Deletar</a>
                        </td>
                    </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php if (isset($_GET['action']) && $_GET['action'] === 'edit' && isset($_GET['id'])): ?>
<div style="margin-top: 30px; padding: 20px; border: 1px solid #ccc; background: #f8f8f8;">
    <h2>Editar Bebida</h2>

    <form action="/?action=editPost" method="post">
        <input type="hidden" name="id" value="<?php echo $_GET['id']?>">

        <label>ID:</label><br>
        <input type="text" value="<?php echo $_GET['id']?>" disabled style="margin-bottom:10px;"><br>

        <label>Nome:</label><br>
        <input type="text" name="nome_bebida" value="<?php echo $clienteEdit['Nome_cliente']?>" required style="width:100%;padding:8px;margin-bottom:10px;"><br>

        <label>CPF:</label><br>
        <input type="text" name="categoria" value="<?php echo $clienteEdit['CPF']?>" readonly style="width:100%;padding:8px;margin-bottom:10px;"><br>

        <label>Telefone:</label><br>
        <input type="text" name="volume" value="<?php echo $clienteEdit['Telefone']?>" style="width:100%;padding:8px;margin-bottom:10px;"><br>

        <button type="submit" style="background:#0066cc;color:white;padding:10px 20px;border:none;cursor:pointer;">
            Salvar Alterações
        </button>
        <a href="/clientes" style="margin-left:10px;padding:10px 20px;background:#aaa;color:white;text-decoration:none;">
            Cancelar
        </a>
    </form>
</div>
<?php endif; ?>
</body>

</html>