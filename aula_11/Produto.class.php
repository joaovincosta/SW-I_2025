<?php

class Produto {
    private $Nome;
    private $Preco;
    private $Quantidade;

    // Construtor
    public function __construct($Nome, $Preco, $Quantidade) {
        $this->Nome = $Nome;
        $this->Preco = $Preco;
        $this->Quantidade = $Quantidade;
    }

    // Getters
    public function getNome(){
        return $this->Nome;
    }

    public function getPreco(){
        return $this->Preco;
    }

    // Setters
    public function setNome($Nome){
        $this->Nome = $Nome;
    }

    public function setPreco($Preco){
        if ($Preco >= 0){
            $this->Preco = $Preco;
        } else{
            echo "Preço inválido";
        }
    }

    // Métodos
    public function MostrarDetalhes() {
        echo "Nome do produto: " . $this->Nome . "<br>Preço por unidade: R$" . $this->Preco . "<br>Quantidade disponível: " . $this->Quantidade; 
    }

    public function AdicionarEstoque($Quantidade){
        if ($Quantidade >= 0){
            $this->Quantidade += $Quantidade;
        } else{
            echo "Estoque inválido";
        }
    }

    public function RemoverEstoque($Quantidade){
        if ($Quantidade >= 0 && $Quantidade <= $this->Quantidade){
            $this->Quantidade -= $Quantidade;
        } else {
            echo "Quantidade inválida para remoção";
        }
    }        
}

?>