<div class="titulo">
    Primeira Classe
</div>

<?php
    class Cliente {
        // atributos
        public $nome = 'Anônimo';
        public $idade = 18;

        public function apresentar() {
            echo "Olá, meu nome é {$this->nome}, tenho {$this->idade} anos.<br>";
        }
    }

    $cliente = new Cliente();
    $cliente->apresentar();

    $cliente2 = new Cliente();
    $cliente2->nome = 'João Pedro';
    $cliente2->idade = 20;
    $cliente2->apresentar();