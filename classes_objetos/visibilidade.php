<div class="titulo">
    Visibilidade
</div>

<?php
    class A {
        public $publico = "Público";
        protected $protegido = "Protegido";
        private $privado = "Privado";

        public function mostrarA() {
            return "Publico: {$this->publico} - Protegido: {$this->protegido} - Privado: {$this->privado}";
        }

        private function naoMostrar() {
            return "Não vou imprimir";
        }
    }

    $a = new A();
    echo $a->mostrarA() . '<br>';
    echo $a->naoMostrar() . '<br>';