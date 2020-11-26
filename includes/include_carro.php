<?php
    class Carro {
        public $chassi;
        public $cor;

        public function info() {
            return "Chassi: $this->chassi - Cor: $this->cor<br>";
        }
    }