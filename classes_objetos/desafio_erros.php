<div class="titulo">
    Desafio Erros
</div>

<?php

    interface Template {
        function metodo1();
        public function metodo2();
    }

    abstract class ClasseAbstrata implements Template {
        public function metodo3() {
            echo "Estou funcionando!";
        }

        function metodo1() {
            echo "Método 1<br>";
        }
        
        function metodo2(){
            echo "Método 2<br>";
        }
    }

    class Classe extends ClasseAbstrata {
        function __construct($param) {
            echo $param . '<br>';
        }
    }

    $exemplo = new Classe("7 erros resolvidos!!");
    $exemplo->metodo3();