<?php
$act = $_GET["action"] ?? "";
$dao = new BebidaDAO();
$bebidas = $dao->Read();
switch ($act) {
    case "add":
        addBebida($dao);
        header("location: /");
        break;
    case "delete":
        delBebida($dao);
        header("location: /");
        break;
    default:
        break;
}

function addBebida($dao){
    if(isset($_POST)){
        $nome = $_POST["nome"] ?? "";
        $categoria = $_POST["categoria"] ??"";
        $volume = $_POST["volume"] ??"";
        $valor = $_POST["valor"] ??"";
        $qtde = $_POST["qtde"] ??"";
        $bebida = new Bebida($nome, $categoria, $volume, $valor, $qtde);
        $dao->Insert($bebida);
    }
}

function delBebida($dao){
    $nome = $_GET["name"];
    $dao->Delete($nome);
}
