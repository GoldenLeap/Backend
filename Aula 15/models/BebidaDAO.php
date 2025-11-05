<?php
class BebidaDAO
{
    private $arquivo = '../data/bebidas.json';
    private $bebidas = [];
    public function __construct()
    { if(file_exists($this->arquivo)){
        $conteudo = file_get_contents($this->arquivo);
        $data = json_decode($conteudo, true);
        if ($data) {
            foreach ($data as $id => $info) {
                $this->bebidas[$id] = new Bebida($info["nome"], $info["categoria"], $info['volume'], $info['valor'], $info['qtde']);
            }
        }
    }}
    public function Read(){
        return $this->bebidas;
    }
    public function Insert(Bebida $bebida)
    {
        $this->bebidas[$bebida->getNome()] = $bebida;
        $this->saveInfo();
    }
    public function Update($nome, $newCategoria, $newVolume=null, $newValor=null, $newQtde=null){
        if(isset($this->bebidas[$nome])){
            if($newCategoria ) $this->bebidas[$nome]->setCategoria($newCategoria);
            if($newCategoria ) $this->bebidas[$nome]->setVolume($newVolume);
            if($newCategoria ) $this->bebidas[$nome]->setValor($newValor);
            if($newCategoria ) $this->bebidas[$nome]->setQtde($newQtde);
            $this->saveInfo();
        }
    }

    public function Delete($nome){
        unset($this->bebidas[$nome]);
    }

    private function saveInfo()
    {
        $data = [];
        foreach ($this->bebidas as $id => $bebida) {
            $data[$id] = [
                'nome' => $bebida->getNome(),
                'categoria' => $bebida->getCategoria(),
                'volume' => $bebida->getVolume(),
                'valor' => $bebida->getValor(),
                'qtde' => $bebida->getQtde(),
            ];
        }
        file_put_contents($this->arquivo, json_encode($data), JSON_PRETTY_PRINT);
    }
}
