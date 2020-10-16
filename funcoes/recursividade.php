<div class="titulo">
    Recursividade
</div>

<?php
    function somaUmAte($numero) {
        $soma = 0;
        for(; $numero >= 1; $numero--) {
            $soma += $numero;
        }
        return $soma;
    }

    function somaRecursiva($numero) {
        if($numero === 1) {
            return 1;
        }
        return $numero + somaRecursiva($numero - 1);
    }

    function somaRecursiva2($numero) {
        return $numero === 1 ? 1 :  $numero + somaRecursiva($numero - 1);
    }

    echo somaUmAte(4) . '<br>';
    echo somaRecursiva(4) . '<br>';
    echo somaRecursiva2(4) . '<br>';