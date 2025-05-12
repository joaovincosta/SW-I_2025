<?php
    class Conta{
        public $Nome;
        public $Cpf;
        private $Saldo;

        public function Sacar($valor){
            if($this->Saldo<$valor){
                return "Saldo insuficiente";
            } else{
                $this->Saldo = $this->Saldo - $valor;
                $texto = "Saque realizado com sucesso. Seu saldo atual é de R$" . $this->Saldo;
                return $texto;
            }
            return $this->Saldo;
        }
        public function Depositar($valor){
            $this->Saldo += $valor;
            $texto = "Depósito realizado com sucesso. Seu saldo atual é de R$" . $this->Saldo;
            return $texto;
        }
        public function MostrarSaldo(){
            echo "Olá, " . $this->Nome . ", CPF: " . $this->Cpf . ". Seu saldo atual é de: " . $this->Saldo . "<br>";
            return $this->Saldo;
        }
    }
?>