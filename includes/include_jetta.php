<?php
    
    include_once('include_carro.php');
    
    class Jetta extends Carro {
        public $marca;
        public $acessorios;

        public function info() {
            echo "Chassi: $this->chassi<br>";
            echo "Cor: $this->cor<br>";
            echo "Marca: $this->marca<br>";
            echo "Acessórios: ", print_r($this->acessorios), '<br>';
        }
    }