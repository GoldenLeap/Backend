<?php
// Cenário 1 – Viagem pelo Mundo
class Turista {
    private $nome;
    private $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function viajarPara(Lugar $lugar) {
        echo $this->nome . " está viajando para " . $lugar->getNome() . ".\n";
        $lugar->realizarAtividades();
    }
}

class Lugar {
    private $nome;
    private $atividades;

    public function __construct($nome, $atividades) {
        $this->nome = $nome;
        $this->atividades = $atividades;
    }

    public function getNome() {
        return $this->nome;
    }

    public function realizarAtividades() {
        foreach ($this->atividades as $atividade) {
            echo $atividade->realizar() . "\n";
        }
    }
}

class ComidaTípica {
    private $nomeComida;

    public function __construct($nomeComida) {
        $this->nomeComida = $nomeComida;
    }

    public function realizar() {
        return "Experimentando a comida típica: " . $this->nomeComida;
    }
}


class Natacao {
    private $local;

    public function __construct($local) {
        $this->local = $local;
    }

    public function realizar() {
        return "Nadando no " . $this->local;
    }
}

$comidaJapao = new ComidaTípica("Sushi");
$comidaBrasil = new ComidaTípica("Feijoada");
$comidaAcre = new ComidaTípica("Tacacá");

$natacaoJapao = new Natacao("Mar de Okinawa");
$natacaoBrasil = new Natacao("Praia de Copacabana");
$natacaoAcre = new Natacao("Rio Purus");

$lugarJapao = new Lugar("Japão", [$comidaJapao, $natacaoJapao]);
$lugarBrasil = new Lugar("Brasil", [$comidaBrasil, $natacaoBrasil]);
$lugarAcre = new Lugar("Acre", [$comidaAcre, $natacaoAcre]);

$turista1 = new Turista("João", 30);
$turista2 = new Turista("Maria", 25);

$turista1->viajarPara($lugarJapao);
$turista2->viajarPara($lugarBrasil);
$turista1->viajarPara($lugarAcre);

// Cenário 2 – Heróis e Personagens

class Heroi {
    private $nome_heroi;

    public function __construct($nome) {
        $this->nome_heroi = $nome;
    }

    public function getNome() {
        return $this->nome_heroi;
    }

    public function treino(Lugar_Treino $treinamento) {
        echo $this->getNome() . " está treinando no " . $treinamento->getNome() . ".\n";
    }

    public function missao(Missao $missao) {
        $missao->realizar();
    }
}

class Lugar_Treino {
    private $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }
}

class Missao {
    private $objetivo;

    public function __construct($objetivo) {
        $this->objetivo = $objetivo;
    }

    public function realizar() {
        echo "Missão: " . $this->objetivo . " está em andamento.\n";
    }
}

$batman = new Heroi("Batman");
$superman = new Heroi("Superman");
$homemAranha = new Heroi("Homem-Aranha");

$lugarTreinamento = new Lugar_Treino("Cotil");
$missao = new Missao("Doar brinquedos no shopping");

$batman->treino($lugarTreinamento);
$superman->missao($missao);
$homemAranha->treino($lugarTreinamento);


// Cenário 3 – Fantasia e Destino


class Personagem {
    private $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function jornada() {
        echo $this->getNome() . " está em uma jornada.\n";
    }

    public function celebrar() {
        echo $this->getNome() . " está celebrando com uma refeição conjunta.\n";
    }
}


$johnSnow = new Personagem("John Snow");
$papaiSmurf = new Personagem("Papai Smurf");
$deadpool = new Personagem("Deadpool");
$dexter = new Personagem("Dexter");

echo "A chuva começou, e todos precisam amar uns aos outros para superar as dificuldades.\n";


$johnSnow->celebrar();
$papaiSmurf->celebrar();
$deadpool->celebrar();
$dexter->celebrar();


// Cenário 4 – Ciclo da Vida
class Pessoa{

    private $nome;
    public function __construct($nome){
        $this->nome = $nome;
    }
    
    function nascer(){
        echo $this->get_nome() . " nasceu.";
    }

    function engravidar(Pessoa $pessoa){
        echo $this->get_nome() . " engravidou de " . $pessoa->get_nome() . "\n";
    }

    function doar_sangue(Pessoa $pessoa){
        echo $this->get_nome() . " doou o sangue para " . $pessoa->get_nome() . "\n";
    }
    function crescer(){
        echo $this->get_nome() . "cresceu um pouco\n";
    }
    function get_nome(){
        return $this->nome;
    }
    function fazer_escolhas(Escolha $escolha){
        echo $this->get_nome() . $escolha->realizar() . "\n";
    }

}

class Escolha{
    private $descricao;

    public function __construct($descricao){
        $this->descricao = $descricao;
    }

    function getDescricao(){
        return $this->descricao;
    }
    function realizar(){
        
        return ' fez a escolha de '. $this->getDescricao();
    }

}

$escolha1 = new Escolha("Roubar uma makita");
$pessoa0 = new Pessoa("Cleber");
$pessoa1 = new Pessoa("João");
$pessoa0->fazer_escolhas($escolha1);
$pessoa1->engravidar($pessoa0);

// Cenário 5 – Analise o problema com linguagem natural

class Usuario {
    private $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function realizarEmprestimo(Emprestimo $emprestimo) {
        echo $this->nome . " fez um empréstimo de " . $emprestimo->getLivro()->getNome() . ".\n";
    }
}

class Emprestimo {
    private $livro;

    public function __construct(Livro $livro) {
        $this->livro = $livro;
    }

    public function getLivro() {
        return $this->livro;
    }
}

class Livro {
    private $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }
}

$livro = new Livro("O Senhor dos Anéis");
$revista = new Livro("Revista Super Interessante");

$usuario = new Usuario("Carlos");
$emprestimoLivro = new Emprestimo($livro);
$usuario->realizarEmprestimo($emprestimoLivro);



// cenario 6


class Cliente{
    private $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    function getNome(){
        return $this->nome;
    }
    function comprar(Ingresso $ingresso){
        echo $this->getNome().' comprou o ingresso para o filme '. $ingresso->get_filme() . "\n";
    }
}

class Ingresso{
    private $filme;

    public function __construct($filme){
        $this->filme = $filme;
    }

    function get_filme(){
        return $this->filme;
    }

    
}

$ingresso_males = new Ingresso("males");

$cliente = new Cliente("Cleber");
$cliente->comprar($ingresso_males);