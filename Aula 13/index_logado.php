<?php
require_once 'connectDB.php';
session_start();

if (empty($_SESSION)) {
    // Significa que as variáveis de SESSAO não foram definidas.
    // Não pode acessar aqui. o sistema manda voltar para a pagina de login
    header("Location: index.php?msgErro=Você precisa se autenticar no sistema.");
    die();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Página Inicial - Ambiente Logado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-
+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <?php if (!empty($_GET['msgErro'])) { ?>
            <div class="alert alert-warning" role="alert">
                <?php echo $_GET['msgErro']; ?>
            </div>
        <?php } ?>
        <?php if (!empty($_GET['msgSucesso'])) { ?>
            <div class="alert alert-success" role="alert">
                <?php echo $_GET['msgSucesso']; ?>
            </div>
        <?php } ?>
    </div>
    <div class="container">
        <div class="col-md-11">

            <h2 class="title">Olá <i><?php echo $_SESSION['nome']; ?></i>, seja bem-
                vindo(a)!</h2>

        </div>
    </div>
    <div class="container">
        <a href="cad_anuncio.php" class="btn btn-primary">Novo Anúncio</a>
        <a href="index_logado.php?meus_anuncios=1" class="btn btn-success">Meus Anúncios</a>
        <a href="index_logado.php?meus_anuncios=0" class="btn btn-info">Todos Anúncios</a>
        <a href="logout.php" class="btn btn-dark">Sair</a>
    </div>
    <?php if(!empty($anuncio)):?>
        <div class="container">
            <table class="table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Fase</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Pelagem / Cor</th>
                        <th scope="col">Raça</th>
                        <th scope="col">Sexo</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($anuncio as $a):?>
                        <tr>
                            <th scope="row"><?=$a['id'];?></th>
                            <td>
                                <?php
                                if($a['fase'] == 'A'){
                                    echo 'Adulto';
                                }else{
                                    echo 'Filhote';
                                }
                                ?>
                            </td>
                            <td><?=$a['tipo'] == 'G'? 'Gato': 'Cachorro'?></td>
                            <td><?=$a['pelagem_cor']?></td>
                            <td><?=$a['raca']?></td>
                            <td><?=$a['sexo'] == 'M' ? 'Macho' : 'Femea'?></td>
                            <td>
                                <?php if ($a['email_usuario'] == $_SESSION['email']): ?>
                                    <a href="alt_anuncio.php?id_anuncio=<?=$a['id']?>">Alterar</a>
                                    <a href="del_anuncio.php?id_anuncio=<?=$a['id']?>">Excluir</a>
                                <?php endif;?>
                            </td>
                        </tr>
                        <?php endforeach;?>
                </tbody>
            </table>
        </div>
        <?php endif;?>
</body>

</html>