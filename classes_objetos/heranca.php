<div class="titulo">
    Herança
</div>

<?php
    class Pessoa {
        public $nome;
        public $idade;

        function __construct($nome, $idade) {
            $this->nome = $nome;
            $this->idade = $idade;
            echo "Pessoa criada!<br>";
        }

        function __destruct() {
            echo "Pessoa diz:Tchau!!<br>";
        }

        public function apresentar() {
            return "Olá, meu nome é {$this->nome}, tenho {$this->idade} anos.";
        }
    }

    class Usuario extends Pessoa {
        public $login;
        public $senha;

        function __construct($nome, $idade, $login, $senha) {
            parent::__construct($nome, $idade);
            $this->login = $login;
            $this->senha = $senha;
        }

        function __destruct() {
            echo "Usuário fiz: Tchau!!!<br>";
        }

        public function apresentar() {
            return "@{$this->login}: {$this->nome}, {$this->idade} anos";
        }

    }
    
    $p1 = new Pessoa("Joao Pedro", 20);
    echo $p1->apresentar() . '<br>';
    unset($p1);
    
    echo '<br>';

    $usuario = new Usuario("Joao Pedro", 20, 'jpedroc', 123);
    echo $usuario->apresentar(), '<br>';
    $usuario = null;

