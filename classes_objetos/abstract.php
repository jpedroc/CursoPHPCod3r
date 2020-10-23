<div class="titulo">
    Classe Abstrata
</div>

<?php
    abstract class Abstrata {
        public abstract function metodo1();
        protected abstract function metodo2($param);

    }

    abstract class FilhaAbstrata extends Abstrata {
        public function metodo1() {
            return 'Chamando método1!!!<br>';
        }
    }

    class Concreta extends FilhaAbstrata {
        public function metodo1() {
            echo "Executando metodo 1 extendido!<br>";
            echo parent::metodo1() . '<br>';
        }
        public function metodo2($param) {
            echo "Executando método dois, com param: $param<br>";
        }

        public function metodo3() {
            echo "Executando método 3<br>";
            $this->metodo2('interno');
        }
    }

    $c = new Concreta();
    $c->metodo1();
    $c->metodo3();
    
    echo '<br>';
    var_dump($c);

    echo '<br>';
    var_dump($c instanceof Concreta);
    var_dump($c instanceof Abstrata);
    var_dump($c instanceof FilhaAbstrata);