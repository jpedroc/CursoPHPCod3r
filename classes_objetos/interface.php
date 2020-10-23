<div class="titulo">
    Interface
</div>

<?php

    interface AnimalTemplate {
        function respirar();
    }

    interface Mamifero {
        function mamar();
    }

    interface Felino {
        function miar(): string;
    }

    class Gato implements AnimalTemplate, Felino, Mamifero {

        function respirar(){
            echo 'Pelo fucinho!<br>';
        }

        function miar(): string {
            return 'Miaaau!';
        }

        function mamar() {
            return "Irei usar leite!";
        }
    }

    $gato = new Gato();
    $gato->respirar();
    echo $gato->miar() . '<br>';
    echo $gato->mamar() . '<br>';

    echo '<br>';
    var_dump($gato);

    echo '<br>';
    var_dump($gato instanceof Gato);
    var_dump($gato instanceof Felino);
    var_dump($gato instanceof AnimalTemplate);
    var_dump($gato instanceof Mamifero);