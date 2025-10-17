<?php
require_once("connectDB.php");

session_start();
if(empty($_SESSION)){
    header('Location: index.php?msgErro=Voce precisa se autenticar no sistema');
    die();
}

if (!empty($_POST)){
    if($_POST['enviarDados'] == 'CAD'){
        try {
            $sql = 'INSERT INTO anuncio(fase, tipo, porte, pelagem, raca, sexo, observacao, email_usuario)
                    VALUES (:fase, :tipo, :porte, :pelagem_cor, :raca, :sexo, :observacao, :email_usuario)';
            
            $stmt = $pdo->prepare($sql);

            $dados = [  
                ':fase' => $_POST['fase'],
                ':tipo' => $_POST['tipo'],
                ':porte' => $_POST['porte'],
                ':pelagem_cor' => $_POST['pelagemCor'],
                ':raca' => $_POST['raca'],
                ':sexo' => $_POST['sexo'],
                ':observacao' => $_POST['observacao'],
                ':email_usuario' => $_SESSION['email'],
            ];

            if ($stmt->execute($dados)){
                header('Location: index_logado.php?msgSucesso=Anúncio cadastrado com sucesso');
                exit;
            }
        } catch (PDOException $e){
            msgStatus("index_logado.php", 'err', 'Falha ao cadastrar anúncio.');
            die($e->getMessage());
        }
    } elseif ($_POST['enviarDados'] == 'ALT'){
        try {
            $sql = "UPDATE anuncio SET fase = :fase, tipo = :tipo, porte = :porte, pelagem = :pelagem_cor, raca = :raca, sexo = :sexo, observacao = :observacao WHERE id = :id_anuncio AND email_usuario = :email_usuario";
            $dados = [
                ':id_anuncio' => $_POST['id_anuncio'],
                ':fase' => $_POST['fase'],
                ':tipo' => $_POST['tipo'],
                ':porte' => $_POST['porte'],
                ':pelagem_cor' => $_POST['pelagemCor'],
                ':raca' => $_POST['raca'],
                ':sexo' => $_POST['sexo'],
                ':observacao' => $_POST['observacao'],
                ':email_usuario' => $_SESSION['email'],
            ];
            $stmt = $pdo->prepare($sql);
            if($stmt->execute($dados)){
                msgStatus('index_logado.php', 'suc', 'Alteração realizada com sucesso');
            }else{
                msgStatus('index_logado.php', 'err', 'Falha ao alterar anuncio');
            }
        } catch (PDOException $e){
            msgStatus('index_logado.php', 'err', 'Falha ao alterar anuncio');
        }
    } elseif($_POST['enviarDados'] == 'DEL'){
         try {
            $sql = "DELETE FROM anuncio WHERE id = :id_anuncio AND email_usuario = :email_usuario";
            $stmt = $pdo->prepare($sql);
            $dados = [
                ":id_anuncio" => $_POST["id_anuncio"],
                ":email_usuario" => $_SESSION['email']
            ];
            if($stmt->execute($dados)){
                msgStatus('index_logado.php', 'suc', 'Anuncio excluido com sucesso');
            }else{
                msgStatus('index_logado.php', 'err', 'Falha ao excluir anuncio');
            }
        } catch (PDOException $e){
            msgStatus('index_logado.php', 'err', 'Falha ao excluir anuncio');
        }
    }
    else {
        msgStatus('index_logado.php', 'err', 'Erro de acesso (Operação não definida).');
    }
} else {
    msgStatus('index_logado.php', 'err', 'Erro de acesso.');
}

function msgStatus($loc, $msg_status, $msg){
    if ($msg_status == 'suc'){
        $msg_status = 'msgSucesso';
    } else {
        $msg_status = 'msgErro';
    }
    header("Location: $loc?$msg_status=$msg");
    exit;
}
