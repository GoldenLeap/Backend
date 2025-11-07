<?php
$act = $_GET["action"] ?? "";
$dao = new BebidaDAO();
$bebidas = $dao->Read();
switch ($act) {
    case "add":
        addBebida($dao);
        break;
    case "delete":
        delBebida($dao);
        break;
    case "edit":
        $bebidaPlace = selectBebida($dao);
        
        break;
    case "editSub":
        editSub($dao);
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
        header("location: /?suc=Sucesso ao adicionar bebida");
    }
}

function delBebida($dao){
    try{$nome = $_GET["name"];
        $dao->Delete($nome);
        header("location: /?suc=Sucesso ao deletar: $nome");
    }
    catch (Exception){
        header("location: /?err=Falha ao deletar bebida");
    }
}

function selectBebida($dao){
    $nome = $_GET["name"];
    return $dao->selectName($nome);

}

function editSub($dao) {
    try{
        $nome = $_POST['nome'];
        $categoria = $_POST["novaCategoria"] ??"";
        $volume = $_POST["novoVolume"] ?? null;
        $valor = $_POST["novoValor"] ??null;
        $qtde = $_POST["novaQtde"] ??null;
    
        $dao->Update($nome, $categoria, $volume, $valor, $qtde);
        header("/?suc=Sucesso ao editar bebida: ".$nome);
    }
    catch(Exception){
        header("/?err=Falha ao editar");
    }
}