<?php
class Pessoa{
    private string $nome ;
    private string $cpf;
    private $telefone;
    private  $idade;
    private $email;
    private $senha;

    public function __construct($nome, $cpf, $telefone, $idade, $email, $senha){
        $this->setNome($nome);
        $this->setCpf($cpf);
        $this->setTelefone($telefone);
        $this->setIdade($idade);
        $this->email = $email;
        $this->senha = $senha;
    }
    // Setter para $nome
    public function setNome($nome){
        $this->nome  = ucwords(strtolower($nome));
    }
    // Getter para $nome
    public function getNome(){
        return $this->nome;
    }
    // Setter para $cpf
    public function setCpf($cpf){
        $this->cpf  = preg_replace('/\D/', '', $cpf); // \D -> pega tudo que não for digito ^~~~~^
    }
    // Getter para $cpf
    public function getCpf(){ 
        return $this->cpf;
    }

    // Setter para $telefone
    public function setTelefone($telefone){
        $this->telefone = preg_replace('/\D/', '',$telefone);
    }
    // Getter para $telefone
    public function getTelefone(){
        return $this->telefone;
    }

    // Setter para $idade
    public function setIdade($idade){
        $this->idade = abs((int)$idade);
    }

    // Getter para $idade
    public function getIdade(){
        return $this->idade;
    }

    public function showInfo(){
        return "Nome: $this->nome\nCPF: $this->cpf\nTelefone: $this->telefone\nIdade: $this->idade\nEmail: $this->email\nSenha: $this->senha";
    }
}


$aluno1 = new Pessoa("GaBriel", '123.456.789-10', '(12)34567-8900', -19, "teste@teste.com", 'teste123');

echo $aluno1->getNome() . "\n";
echo $aluno1->getCpf() . "\n";
echo $aluno1->getTelefone() . "\n";
echo $aluno1->getIdade() . "\n"; 
echo $aluno1->showInfo();