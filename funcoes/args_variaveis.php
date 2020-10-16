<div class="titulo">
    Argumentos Variáveis
</div>

<?php
    function soma($var1, $var2) {
        return $var1 + $var2;
    }

    echo soma(4, 5) . '<br>';
    echo soma(4, 9, 7) . '<br>';

    function somaCompleta(...$numeros) {
        $soma = 0;
        foreach($numeros as $num) {
            $soma += $num;
        }
        return $soma;
    }

    echo somaCompleta(4, 1, 2, 7) . '<br>';

    $array = [7, 3, 13];
    echo somaCompleta(...$array) . '<br>';

    function membros($titular, ...$dependentes) {
        echo "Titular: $titular <br>";
        if($dependentes) {
            foreach($dependentes as $dep) {
                echo "Dependente: $dep<br>";
            }
        }
    }

    membros("Joao Pedro", "Katia", "Maria Ritha");