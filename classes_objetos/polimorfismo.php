<div class="titulo">
    Polimorfismo
</div>
<?php
    abstract class Comida {
        public $peso;
    }

    class Arroz extends Comida {

    }

    class ArrozCarreteiro extends Arroz {

    }

    class Feijao extends Comida {

    }

    class Sorvete extends Comida {

    }

    class Animal {
        public $peso;

        function __construct($peso) {
            $this->peso = $peso;
        }

        public function comer(Comida $comida) {
            echo "Comeu ", get_class($comida), '<br>';
            $this->peso += $comida->peso;
        }
    }

    
    $comida1 = new Arroz();
    $comida1->peso = 1.01;
    $comida2 = new ArrozCarreteiro();
    $comida2->peso = 0.5;
    $comida3 = new Sorvete();
    $comida3->peso = 0.3;
    $comida4 = new Feijao();
    $comida4->peso = 1;
    
    $gato = new Animal(76.3);
    echo "Peso do animal: ", $gato->peso, '<br>';

    $gato->comer($comida1);
    $gato->comer($comida2);
    $gato->comer($comida3);
    $gato->comer($comida4);

    echo "Peso do animal: ", $gato->peso;
