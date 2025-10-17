<?php
require "AlunoDAO.php";
require "CRUD.php";


$dao  = new AlunoDAO();

// Create
$dao->criarAluno(new Aluno(1, "Maria", "Design"));
$dao->criarAluno(new Aluno(2, "Gabriel", "Moda"));
$dao->criarAluno(new Aluno(3, "Eduardo", "Manicure"));
// Crie mais 6 objetos obedecendo a seguinte lista:
// ID - NOME - CURSO
// 4 - Aurora - Arquitetura
// 5 - Oliver - Director
// 6 - Amanda - Lutadora
// 7 - Geysa - Engenheira
// 8 - Joab - Professor
// 9 - Bernardo - Streamer
$dao->criarAluno(new Aluno(4, 'Aurora', 'Arquiteta'));
$dao->criarAluno(new Aluno(5, 'Oliver', 'Director'));
$dao->criarAluno(new Aluno(6, 'Amanda', 'Lutadora'));
$dao->criarAluno(new Aluno(7, 'Geyse', 'Engenheira'));
$dao->criarAluno(new Aluno(8, 'Joab', 'Professor'));
$dao->criarAluno(new Aluno(9, 'Bernardo', 'Streamer'));
// READ
echo "Listagem Inicial:\n";

foreach ($dao->lerAluno() as $aluno){
    echo "{$aluno->getId()} - {$aluno->getNome()} - {$aluno->getCurso()} \n";
};

// Update
$dao->atualizarAluno(3, "Viviane", "Eletricista");

echo "Após Atualização:\n";
foreach ($dao->lerAluno() as $aluno){
    echo "{$aluno->getId()} - {$aluno->getNome()} - {$aluno->getCurso()} \n";
}
// Delete
$dao->excluirAluno(2);

echo "Após Exclusão:\n";
foreach ($dao->lerAluno() as $aluno){
    echo "{$aluno->getId()} - {$aluno->getNome()} - {$aluno->getCurso()} \n";
}