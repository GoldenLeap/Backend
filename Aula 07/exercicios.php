<?php
// 1. Criação básica
// Crie uma classe chamada Carro com os atributos privados marca e
// modelo.
// o Implemente os métodos setMarca, getMarca, setModelo e getModelo.
// o Crie um objeto da classe e use os setters para atribuir valores
// e os getters para exibir os dados.

class Carro
{
    private $marca;
    private $modelo;

    public function __construct($marca, $modelo)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }
    public function setMarca($marca)
    {
        $this->marca = $marca;
    }
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }
    public function getMarca()
    {
        return $this->marca;
    }
    public function getmodelo()
    {
        return $this->modelo;
    }
}

$carro1 = new Carro("Chevrolet", "Onix");
echo $carro1->getMarca() . "\n";
echo $carro1->getModelo() . "\n";
$carro1->setMarca("Fiat");

$carro1->setModelo("Argo");
echo $carro1->getMarca() . "\n";
echo $carro1->getModelo() . "\n";

// 2. Pessoa com atributos
// Crie uma classe Pessoa com os atributos privados nome, idade e email.
// o Utilize os setters para preencher os dados de uma pessoa.
// o Em seguida, use os getters para exibir as informações dessa
// pessoa em formato de frase, por exemplo:
// O nome é Samuel, tem 22 anos e o email é samuel@exemplo.com.

class Pessoa
{
    private $nome;
    private $idade;
    private $email;

    public function __construct($nome, $idade, $email)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->email = $email;
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function getIdade()
    {
        return $this->idade;
    }
    public function getEmail()
    {
        return $this->email;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
}
$pessoa1 = new Pessoa("Samul", 20, "samuel@emplo.com");
$pessoa1->setNome("Samuel");
$pessoa1->setIdade(22);
$pessoa1->setEmail("samuel@exemplo.com");
echo "O nome é " . $pessoa1->getNome() . " tem " . $pessoa1->getIdade() . " anos e o email é " . $pessoa1->getEmail() . ".\n";

// 3. Validação em setter
// Crie uma classe Aluno com os atributos privados nome e nota.
// o No setNota, garanta que a nota só pode ser entre 0 e 10. Se o
// valor for inválido, armazene 0.
// o Teste criando alunos com notas válidas e inválidas, exibindo os
// resultados com getNota().
class Aluno
{
    private $nome;
    private $nota;

    public function __construct($nome, $nota)
    {
        $this->setNome($nome);
        $this->setNota($nota);
    }

    public function setNota($nota)
    {
        $nota = (float)$nota;

        $this->nota = match (true) {
            $nota > 10 => 10,
            $nota >= 0 && $nota <= 10 => $nota,
            default => 0
        };
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = ucwords(strtolower($nome));
    }

    public function getNota()
    {
        return $this->nota;
    }
}

$aluno1 = new Aluno("test", 20);
$aluno2 = new Aluno("test2", -110);
$aluno3 = new Aluno("test3", 10);
$aluno4 = new Aluno("AAAAAAAAAAAAA", 0);
$aluno5 = new Aluno("BBBBBBBBBBBBB", "abacate");

echo $aluno1->getNota() . "\n";
echo $aluno2->getNota() . "\n";
echo $aluno3->getNota() . "\n";
echo $aluno4->getNota() . "\n";
echo $aluno5->getNota() . "\n";

// 4. Encapsulamento de Produto
// Crie uma classe Produto com os atributos privados nome, preco e
// estoque.
// o Implemente os setters e getters.
// o Faça um objeto da classe e use os setters para definir os
// valores.
// o Exiba com os getters uma frase como:
// O produto X custa R$ Y e possui Z unidades em estoque.


class Produto
{
    private $nome;
    private $preco;
    private $estoque;


    public function __construct($nome, $preco, $estoque)
    {
        $this->setNome($nome);
        $this->setPreco($preco);
        $this->setestoque($estoque);
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setPreco($preco, $moeda = "R$",)
    {
        $preco = (float) $preco;
        $preco = match (true) {
            $preco < 0 => 0,
            $preco >= 0 => $preco,

            default => 0
        };
        $this->preco = "$moeda" . number_format($preco, 2, ",", ".");
    }
    public function setEstoque($estoque)
    {
        $estoque = (int)$estoque;
        $this->estoque = match (true) {
            $estoque < 0 => 0,
            $estoque >= 0 => $estoque,
            default => 0
        };
    }
    public function getNome()
    {
        return $this->nome;
    }

    public function getPreco()
    {
        return $this->preco;
    }
    public function getEstoque()
    {
        return $this->estoque;
    }
    public function getInfo()
    {
        return "O produto $this->nome custa $this->preco e possui $this->estoque unidades em estoque.\n";
    }
}
$produto1 = new Produto("Produto1", 10000000000000000, 0);
$produto2 = new Produto("Produto2", "aaaaaaaaaaa", 10);
$produto3 = new Produto("Produto3", -10, -20);
$produto4 = new Produto("Produto4", 20.20, -20);

echo $produto1->getInfo();
echo $produto2->getInfo();
echo $produto3->getInfo();
echo $produto4->getInfo();

// 5. Alteração de dados
// Crie uma classe Funcionario com os atributos privados nome e salario.
// o Crie métodos setNome, getNome, setSalario e getSalario.
// o Defina os valores de um funcionário com os setters.
// o Depois, altere o nome e o salário usando novamente os
// setters.
// o Mostre, com os getters, que os valores realmente foram
// modificados.

class Funcionario
{
    private $nome;
    private $salario;

    public function setNome($nome)
    {
        $this->nome = ucwords(strtolower($nome));
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setSalario($salario)
    {
        $salario = (float)$salario;
        $this->salario = $salario < 0 ? 0 : $salario;
    }
    public function getSalario()
    {
        return number_format($this->salario, 2, ",", ".");
    }
    public function __construct($nome, $salario)
    {
        $this->setNome($nome);
        $this->setSalario($salario);
    }
}

$funcionario1 = new Funcionario("Cleiton", 1321320);
echo "O funcionario " . $funcionario1->getNome() . " recebe " . "R$" . $funcionario1->getSalario() . ".\n";
$funcionario1->setNome("José");
$funcionario1->setSalario(1999);
echo "O funcionario " . $funcionario1->getNome() . " recebe " . "R$" . $funcionario1->getSalario() . ".\n";
