<div class="titulo">
    Interface
</div>

<?php

    interface AnimalTemplate {
        function respirar();
    }

    interface Felino {
        function miar(): string;
    }

    class Gato implements AnimalTemplate, Felino {

        function respirar(){
            echo 'Pelo fucinho!<br>';
        }

        function miar(): string {
            return 'Miaaau!<br>';
        }
    }

    $gato = new Gato();
    $gato->respirar();
    echo $gato->miar() . '<br>';