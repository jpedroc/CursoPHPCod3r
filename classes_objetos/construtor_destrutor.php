<div class="titulo">
    Construtor e Destrutor
</div>

<?php
    class Pessoa {
        public $nome;
        public $idade;

        function __construct($nome = null, $idade = null) {
            $this->nome = $nome;
            $this->idade = $idade;
        }

        function __destruct() {
            echo "Instância de {$this->nome} morreu! <br>";
        } 

        public function apresentar() {
            return "Olá, eu me chamo {$this->nome}, tenho {$this->idade} anos.";
        }
    }

    $p1 = new Pessoa("Joao Pedro", 20);
    echo $p1->apresentar() . '<br>';
    unset($p1);


    $p2 = new Pessoa();
    echo $p2->apresentar() . '<br>';
    $p2 = null;