<?php
require_once("connectDB.php");
// Definir o BD (e a tabela)
// Conectar ao BD (com o PHP)

if (!empty($_POST)) {
// Está chegando dados por POST e então posso tentar inserir no banco
// Obter as informações do formulário ($_POST)
try {
    // Preparar as informações
    // Montar a SQL (pgsql)
        $sql = "INSERT INTO usuario(nome, data_nascimento, telefone, email, senha) 
        VALUES (:nome, :dataNascimento, :telefone, :email, :senha)";
       // Preparar a instrução sql
       $stmt = $pdo->prepare($sql);
       // estrutura de dados
        $dados = [
            ':nome' => $_POST['name'],
            ':dataNascimento' => $_POST['dataNascimento'],
            ':telefone' => $_POST['telefone'],
            ':email' => $_POST['email'],
            ':senha' => md5($_POST['password']), // Criptografar a senha usando md5 (nota: password_hash(senha, PASSWORD_BCRYPT) é mais seguro ao que parece)
        ];
        // Tentar executar a instrução SQL
        // Realizar inserção de dados no BD
        if ($stmt->execute($dados)) {
            header("Location: index.php?msgSucesso=Cadastro realizado com sucesso!");
        }
    } catch (PDOException $e) {
        header("Location: index.php?msgErro=Falha ao cadastrar...");
    }

}else{
    header("Location: index.php?msgErro=Erro de acesso.");
}
die();
// Redirecionar para a pagina de login com sucesso ou erro
?>
