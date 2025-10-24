<?php 
    class ProdutoDAO{
        private $arquivo = "produtos.json";
        private $produtos = [];
        public function __construct(){
            if(file_exists($this->arquivo)){
                $conteudo = file_get_contents($this->arquivo);
                $data = json_decode($conteudo, true);
                if($data){
                    foreach($data as $cod => $info){
                        $this->produtos[$cod] = new Produto($info["codigo"], $info["nome"], $info["preco"]);
                    }
                }
            }
        }
        // Create
        public function Insert(Produto $produto){
            $this->produtos[$produto->getCodigo()] = $produto;
            $this->saveInfo();
        }
        // Read
        public function Read(){
            return $this->produtos;
        }

        // Update
        public function Update($cod, $newNome = null, $newPreco = null){
            if(isset($this->produtos[$cod])){
                if($newNome) $this->produtos[$cod]->setNome($newNome);
                if($newPreco) $this->produtos[$cod]->setPreco($newPreco);
                $this->saveInfo();
            }
        }

        // Delete
        public function Delete($cod){
            unset($this->produtos[$cod]);
            $this->saveInfo();
        }

        private function saveInfo(){
            $data = [];
            foreach($this->produtos as $cod => $produto){
                $data[$cod] = [
                    "codigo" => $produto->getCodigo(),
                    "nome" => $produto->getNome(),
                    "preco" => $produto->getPreco()
                ];
            }
            file_put_contents($this->arquivo, json_encode($data), JSON_PRETTY_PRINT);
        }
    }