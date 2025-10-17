<?php
require_once("connectDB.php");
// Conectar ao DB

// Verificar se está chegando dados por POST
if (!empty($_POST)) {
    // Iniciar sessão
    session_start();
    try {
        $sql = "SELECT nome, email, telefone, data_nascimento FROM usuario WHERE email = :email AND senha = :senha";
        $stmt = $pdo->prepare($sql);

        $dados = [
            ':email' => $_POST['email'],
            ':senha' => md5($_POST['password'])
        ];
        $stmt->execute($dados);
        $result = $stmt->fetchAll();
        if ($stmt->rowCount() > 0) {
            $result = $result[0];

            $_SESSION['nome'] = $result['nome'];
            $_SESSION['email'] = $result['email'];
            $_SESSION['data_nascimento'] = $result['data_nascimento'];
            $_SESSION['telefone'] = $result['telefone'];
            header('Location: index_logado.php');
        } else {
            session_destroy();
            header('Location: index.php?msgErro=E-mail ou Senha invalidos.');
        }
    } catch (PDOException $e) {
        die($e->getMessage());
    }
} else {
    header("Location: index.php?msgErro=Você não tem permissão para acessar esta página..");
}
die();
?>
