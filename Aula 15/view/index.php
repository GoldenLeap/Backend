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
    <link rel="stylesheet" href="./style.css">
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <!-- TOAST -->
    <?php if (! empty($_GET["suc"])): ?>
        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive"
                aria-atomic="true" id="liveToast">
                <div class="d-flex">
                    <div class="toast-body">
                        <?php echo $_GET["suc"] ?>
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                        aria-label="Fechar"></button>
                </div>
            </div>
        </div>
    <?php elseif (! empty($_GET["err"])): ?>
        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div class="toast align-items-center text-bg-danger border-0" role="alert" aria-live="assertive"
                aria-atomic="true" id="liveToast">
                <div class="d-flex">
                    <div class="toast-body">
                        <?php echo $_GET["err"] ?>
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                        aria-label="Fechar"></button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="bebidas">
        <h1>Adicionar bebidas</h1>
        <form action="/?action=add" method="post">
            <label for="nome">Nome da bebida</label>
            <input type="text" name="nome" required>
            <label for="categoria">Categoria da bebida</label>
            <input type="text" name="categoria" required>
            <label for="volume">Volume da bebida</label>
            <input type="number" name="volume" min="0" required>
            <label for="qtde">Quantidade da bebida</label>
            <input type="number" name="qtde" min="0" required>
            <label for="valor">Valor da bebida</label>
            <input type="number" step="any" name="valor" min="0" max="4294967295" required>
            <input type="submit" value="Adicionar bebida">
        </form>
    </div>

    <div class="lista">
        <h1>Lista de Bebidas</h1>
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
                        <td><?php echo $bebida->getNome() ?></td>
                        <td><?php echo $bebida->getCategoria() ?></td>
                        <td><?php echo $bebida->getVolume() ?></td>
                        <td><?php echo $bebida->getValor() ?></td>
                        <td><?php echo $bebida->getQtde() ?></td>
                        <td class="acoes">
                            <button class="btn btn-danger" onclick="if(window.confirm('Tem certeza que deseja excluir a bebida?')) window.location = '/?action=delete&name=<?php echo $bebida->getNome();?>'" >Deletar</button>
                            <a class="btn btn-success" href="<?php echo isset($_GET["name"]) && $_GET["name"] == $bebida->getNome() ? '/' : '/?action=edit&name=' . $bebida->getNome(); ?>">Editar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <?php if (isset($_GET["action"]) && $_GET["action"] == "edit"): ?>
        <div class="editar">
            <h1>Editar bebida</h1>
            <?php $name = urlencode($_GET['name']); ?>
                <form action="/?action=editSub&name=<?php echo $name ?>" method="post">
                <label for="nome">Nome da bebida</label>
                <input type="text" value="<?php echo $_GET["name"] ?>" name="nome" required>
                <label for="categoria">Categoria da bebida</label>
                <input type="text" name="novaCategoria" value="<?php echo $bebidaPlace->getCategoria() ?>" required>
                <label for="volume">Volume da bebida</label>
                <input type="number" name="novoVolume" value="<?php echo $bebidaPlace->getVolume() ?>" min="0" required>
                <label for="qtde">Quantidade da bebida</label>
                <input type="number" name="novaQtde" value="<?php echo $bebidaPlace->getQtde() ?>" min="0" required>
                <label for="valor">Valor da bebida</label>
                <input type="number" name="novoValor" step="any" value="<?php echo (float)$bebidaPlace->getValor() ?>" min="0" required>
                <input type="submit" value="Editar Bebida">
            </form>
        </div>
    <?php endif; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const toastEl = document.getElementById("liveToast");
            if (toastEl) {
                const toast = new bootstrap.Toast(toastEl);
                toast.show();
            }
        });
    </script>
</body>
</html>
