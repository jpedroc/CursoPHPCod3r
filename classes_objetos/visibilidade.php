<div class="titulo">
    Visibilidade
</div>

<?php
    class A {
        public $publico = "Público";
        protected $protegido = "Protegido";
        private $privado = "Privado";

        public function mostrarA() {
            return "Classe A -> Publico: {$this->publico} - Protegido: {$this->protegido} - Privado: {$this->privado}";
        }

        protected function porHeranca() {
            return "Metodo Protected transmitido por Herança";
        }

        private function naoMostrar() {
            return "Não vou imprimir";
        }
    }

    $a = new A();
    echo $a->mostrarA() . '<br>';
    echo '<br>';
    // echo $a->naoMostrar() . '<br>';

    class B extends A {
        public function mostrarB() {
            echo parent::porHeranca() . '<br>';
            return "Classe B -> Publico: {$this->publico} - Protegido: {$this->protegido} - Privado: {$this->privado}" ;
        }
    }

    $b = new B();
    echo $b->mostrarA() . '<br>';
    echo $b->mostrarB() . '<br>';

    class C {
        public $b;

        function __construct() {
            $this->b = new B();
        }

        public function mostrarC() {
            return "Classe C -> Publico: {$this->b->publico} - Protegido: {$this->b->protegido} - Privado: {$this->b->privado}";
        }

    }

    $c = new C();
    echo $c->mostrarC() . '<br>';
    echo 'fim';