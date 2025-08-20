<?php

// Crie uma classe (molde de objetos) chamada 'Cachorro com os seguintes atributos: 
// Nome, Idade, Raça, castrado e sexo

class Cachorro{
    public string $nome;
    public int $idade;
    public string $raca;
    public bool $castrado;
    public string $sexo;
    public function __construct(string $nome, int $idade, string $raca, bool $castrado, string $sexo){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->raca = $raca;
        $this->castrado = $castrado;
        $this->sexo = $sexo;
    }   
}

// Exercicio 2: Apos a criação da classe, crie 10 cachorros (10 objetos)
$cachorro1 = new Cachorro('Cleide', 10, 'Spitz Alemão', true, 'F');
$cachorro2 = new Cachorro('Joana', 3, 'Lulu da pomeronia', false, 'F');
$cachorro3 = new Cachorro('Adolfo', 1, 'Shiba Inu', false, 'M');
$cachorro4 = new Cachorro('Roberto', 2, 'Dachshund', true, 'M');
$cachorro5 = new Cachorro('Davi', 4, 'Chihuahua', true, 'M');
$cachorro6 = new Cachorro('Alice', 6, 'Poodle', true, 'F');
$cachorro7 = new Cachorro('Josoares', 12, 'Pug', true, 'M');
$cachorro8 = new Cachorro('Leticia', 5, 'Pinscher Miniatura', false, 'F');
$cachorro9 = new Cachorro('Antonio', 8, 'Dobermann', false, 'M');
$cachorro10 = new Cachorro('Bianca', 2, 'Husky Siberiano', false, 'F');

// Exercicio 3: Após a conclusão dos exercicios 1 e 2, crie uma nova classe
// chamada 'Usuario' com os atributos: Nome, CPF, Sexo, Email, Estado Civil, Cidade, Estado
// Endereco e CEP
class Usuario{
    public string $nome;
    public string $cpf;
    public string $sexo;
    public string $email;
    public string $estado_civil;
    public string $cidade;
    public string $estado;
    public string $endereco;
    public string $cep;
    

    public function __construct(string $nome, string $cpf, string $sexo, string $email, string $estado_civil, string $cidade, string $estado, string $endereco, string $cep){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->sexo = $sexo;
        $this->email = $email;
        $this->estado_civil = $estado_civil;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->endereco = $endereco;
        $this->cep = $cep;
    }
}

// Exercicio 4: Crie 3 objetos seguindo as seguintes informações:
    /*
        Usuário 1:
            - Nome: Josenildo Afonso Souza
            - CPF: 100.200.300-40
            - Sexo: Masculino
            - Email: josenewdo.souza@gmail.com
            - Estado civil: Casado
            - Cidade: Xique-Xique
            - Estado: Bahia
            - Endereço: Rua da amizade, 99
            - CEP: 40123-98
            
        Usuário 2:
            - Nome: Valentina Passos Scherrer
            - CPF: 070.070.060-70
            - Sexo: Feminino
            - Email: scherrer.valen@outlook.com
            - Estado civil: Divorciada
            - Cidade: Iracemápolis
            - Estado: São Paulo
            - Endereço: Avenida da saudade, 1942
            - CEP: 23456-24

        Usuário 3:
            - Nome: Claudio Braz Nepumoceno
            - CPF: 575.575.242-32
            - Sexo: Masculino
            - Email: Clauclau.nepumoceno@gmail.com
            - Estado civil: Solteiro
            - Cidade: Piripiri
            - Estado: Piauí
            - Endereço: Estrada 3, 33
            - CEP: 12345-99


    */

$usuario1 = new Usuario("Josenildo Afonso Souza", "100.200.300-40", "Masculino", "josenewdo.souza@gmail.com", "Casado", "Xique-Xique", "Bahia", "Rua da amizade, 99", "40123-98");
$usuario2 = new Usuario("Valentina Passos Scherrer", "070.070.060-70", "Feminino", "scherrer.velen@outlook.com", "Divorciada", "Iracemápolis", "São Paulo", "Avenida da saudade, 1942", "23456-24");
$usuario3 = new Usuario("Claudio Braz Nepumoceno", "575.575.242-32", "Masculino", "Clauclau.nepumoceno@gmail.com", "Solteiro", "Piripiri", "Piauí", "Estrada 3, 33", "12345-99");
