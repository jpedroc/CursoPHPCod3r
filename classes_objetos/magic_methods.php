<div class="titulo">
    Métodos Mágicos
</div>

<?php
    class Pessoa {
        public $nome;
        public $idade;

        function __construct($nome, $idade) {
            echo 'Construtor invocado!<br>';
            $this->nome = $nome;
            $this->idade = $idade;
        }

        function __destruct() {
            echo 'E morreu...<br>';
        }

        public function __toString() {
            return "{$this->nome} têm {$this->idade} anos.";
        }        

        public function apresentar() {
            echo $this . '<br>';
        }

        public function __get($name) {
            echo "Lendo atributo não declarado: {$name}<br>";
        }

        public function __set($name, $value) {
            echo "Alterando atributo não declarado: {$name}/{$value}<br>";
        }

        public function __call($metodo, $params) {
            echo "Tentando executar método '${metodo}'<br>";
            echo "Parâmetros: ";
            print_r($params);
        }
    }

    $p1 = new Pessoa('João Pedro', 20);
    $p1->apresentar();
    echo $p1, '<br>';
    $p1->nome = "Jean";
    $p1->idade = 21;
    $p1->apresentar();

    $p1->sobrenome;
    $p1->sobrenome = "Calixto";

    $p1->viajar("Colatina", "Guarapari");