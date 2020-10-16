<div class="titulo">
    Funções Anônimas
</div>

<?php
    $soma = function($var1, $var2) {
        return $var1 + $var2;
    };

    echo $soma(1, 2). '<br>';

    function executar($a, $b, $op, $funcao) {
        $resultado = $funcao($a, $b);
        echo "$a $op $b = $resultado<br>";
    }

    executar(2, 3, "+", $soma);

    $multiplicacao = function($var1, $var2) {
        return $var1 * $var2;
    };

    executar(3, 4, '*', $multiplicacao);

    $divisao = function($var1, $var2) {
        return $var1 / $var2;
    };

    executar(72, 3, '/', $divisao);