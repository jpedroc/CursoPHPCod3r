<div class="titulo">
    Atribuições
</div>

<?php
    $titulo = 'Atribuições';
    $numero = 15;
    echo $numero . '<br>';
    $numero += 5;
    echo $numero . '<br>';
    $numero += 3.8;
    echo $numero . '<br>';
    $numero--;
    echo $numero . '<br>';
    ++$numero;
    echo $numero . '<br>';
    $numero *= 2;
    echo $numero . '<br>';
    $numero **= 3;
    echo $numero . '<br>';
    $numero /= 2;
    echo $numero . '<br>';
    $numero %= 9;
    echo $numero . '<br>';
    $numero .= 7;
    echo $numero . '<br>';

    $texto = "Esse é um texto";
    echo $texto . '<br>';
    $texto = $texto . ' qualquer';
    echo $texto . '<br>';
    $texto .= ' de verdade!';
    echo $texto . '<br>';

    $variavelInexistente = "Valor existente!";
    echo $variavelInexistente . '<br>';
    unset($variavelInexistente);
    $valor = $variavelInexistente ?? 'Valor Default!';
    echo $valor . '<br>';

