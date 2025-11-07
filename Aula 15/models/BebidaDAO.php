<?php
class BebidaDAO
{
    private $arquivo = '../data/bebidas.json';
    private $bebidas = [];
    public function __construct()
    {if (file_exists($this->arquivo)) {
        $conteudo = file_get_contents($this->arquivo);
        $data     = json_decode($conteudo, true);
        if ($data) {
            foreach ($data as $id => $info) {
                $this->bebidas[$id] = new Bebida($info["nome"], $info["categoria"], $info['volume'], $info['valor'], $info['qtde']);
            }
        }
    }}
    public function Read()
    {
        return $this->bebidas;
    }
    public function Insert(Bebida $bebida)
    {
        $this->bebidas[$bebida->getNome()] = $bebida;
        $this->saveInfo();
    }
    public function Update($nome, $newNome = null, $newCategoria = null, $newVolume = null, $newValor = null, $newQtde = null)
    {
        if (isset($this->bebidas[$nome])) {
            if ($newCategoria) {
                $this->bebidas[$nome]->setCategoria($newCategoria);
            }

            if ($newVolume) {
                $this->bebidas[$nome]->setVolume($newVolume);
            }

            if ($newValor) {
                $this->bebidas[$nome]->setValor($newValor);
            }

            if ($newQtde) {
                $this->bebidas[$nome]->setQtde($newQtde);
            }

            if ($newNome) {$this->bebidas[$nome]->setNome($newNome);
                $this->bebidas[$newNome] = $this->bebidas[$nome];
                unset($this->bebidas[$nome]);}
            $this->saveInfo();
        }
    }

    public function Delete($nome)
    {
        unset($this->bebidas[$nome]);
        $this->saveInfo();
    }

    private function saveInfo()
    {
        $data = [];
        foreach ($this->bebidas as $id => $bebida) {
            $data[$id] = [
                'nome'      => $bebida->getNome(),
                'categoria' => $bebida->getCategoria(),
                'volume'    => $bebida->getVolume(),
                'valor'     => $bebida->getValor(),
                'qtde'      => $bebida->getQtde(),
            ];
        }
        file_put_contents($this->arquivo, json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES), JSON_PRETTY_PRINT);
    }
    public function selectName($nome)
    {
        foreach ($this->bebidas as $bebida) {
            if ($bebida->getNome() == $nome) {
                return $bebida;
            }
        }
    }
}
