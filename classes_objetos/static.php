<div class="titulo">
    Membros Estáticos
</div>

<?php
    class A {
        public $naoStatic = 'Variavel de instancia';
        public static $static = 'Variavel de classe';

        public function mostrarA() {
            echo "Não estática = {$this->naoStatic}<br>";
            // Tentativa 1
            // echo "Estática = {$this->static}<br>";
            // Tentativa 2
            // echo "Estática = {self::$static}<br>";
            echo "Estática = " . self::$static . '<br>';
        }

        public static function mostrarStaticA() {
            // echo "Não estática = {$this->naoStatic}<br>";
            // echo "Estática = {$this->static}<br>";
            echo "Estática = " . self::$static . '<br>';
        }
    }

    $a = new A();
    $a->mostrarA();
    $a->mostrarStaticA();

    echo '<br>';

    echo A::$static, '<br>';
    A::mostrarStaticA();