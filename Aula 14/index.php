<?php
require "Produto.php";
require "ProdutoDAO.php";

$randNum = rand(1, 1000);
$dao = new ProdutoDAO();
$dao->Insert(new Produto($randNum + 1, "Tomate", 6.49));
$dao->Insert(new Produto($randNum + 2, "Maçã", 7.99));
$dao->Insert(new Produto($randNum + 3, "Queijo Brie", 39.90));
$dao->Insert(new Produto($randNum + 4, "Iogurte Grego", 4.79));
$dao->Insert(new Produto($randNum + 5, "Guaraná Jesus", 5.49));
$dao->Insert(new Produto($randNum + 6, "Bolacha Bono", 3.99));
$dao->Insert(new Produto($randNum + 7, "Desinfetante Urca", 7.50));
$dao->Insert(new Produto($randNum + 8, "Prestobarba Bic", 18.90));


echo "Lista de produtos: \n";
foreach($dao->Read() as $produto){
    echo "{$produto->getCodigo()} - {$produto->getNome()} - {$produto->getPreco()}\n";
}
// Update
$dao->Update($randNum + 7, "Desinfetante Barbarex");
$dao->Update($randNum + 5, newPreco: 100.00 );
$dao->Update($randNum + 3, newPreco: 50.00 );
echo "Após update: \n";
foreach($dao->Read() as $produto){
    echo "{$produto->getCodigo()} - {$produto->getNome()} - {$produto->getPreco()}\n";
}

$dao->Delete($randNum + 1);
$dao->Delete($randNum + 2);
echo "Após delete: \n";
foreach($dao->Read() as $produto){
    echo "{$produto->getCodigo()} - {$produto->getNome()} - {$produto->getPreco()}\n";
}


