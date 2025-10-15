<?php
session_start();
if(empty($_SESSION)){
    header("Location: index.php?msgErro=Você deve estar autenticado no sistema");
}else{
    session_destroy();
    header("Location index.php?msgSucesso=Logout realizado.");
    die();
}
?>
