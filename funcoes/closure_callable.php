<div class="titulo">
    Closure & Callable
</div>

<?php
    $soma1 = function($var1, $var2) {
        return $var1 + $var2;
    };

    function soma2($a, $b) {
        return $a + $b;
    }

    echo $soma1(2, 7) . ' ';
    echo (is_callable($soma1) ? "Sim" : "Não") . '<br>';

    echo soma2(2, 7) . ' ';
    echo (is_callable($soma1) ? "Sim" : "Não") . '<br>';
    
    function executar1($a, $b, $op, Callable $funcao) {
        $resultado = $funcao($a, $b);
        echo "$a $op $b = $resultado<br>";
    }

    executar1(3, 7, '+', $soma1);
    executar1(3, 7, '+', soma2);

    echo '<br>';

    function executar2($a, $b, $op, Closure $funcao) {
        $resultado = $funcao($a, $b);
        echo "$a $op $b = $resultado<br>";
    }

    executar2(3, 7, '+', $soma1);
    executar2(3, 7, '+', soma2);

