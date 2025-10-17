<?php
$endereco = 'localhost';
$banco = 'postgres';
$usuario = 'postgres';
$senha = 'postgres';

try {
    $pdo = new PDO("pgsql:host=$endereco;port=5432;dbname=$banco", $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  // Definindo o modo de erro
    error_log("Conectado a banco de dados");
}catch (PDOException $e){
    error_log("Falha ao conectar com banco de dados: ");
    die($e->getMessage());
}
?>