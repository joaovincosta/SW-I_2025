<?php
    class Pessoa{
        // ATRIBUTOS
        public $Nome;
        public $Peso;
        public $Altura;

        //MÉTODOS
        public function MostrarDados(){
            echo "O nome é: " . $this->Nome . "<br>";            
            echo "O peso é: " . $this->Peso . "<br>";
            echo "A altura é: " . $this->Altura . "<br>";
        }

        public function Apresentar(){
            echo "Olá, meu nome é " . $this->Nome . ". Eu peso " . $this->Peso . " quilogramas e meço " . $this->Altura . " de altura.";
            echo "<hr>";
        }
    }
?>