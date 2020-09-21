<div class="titulo">
    Desafio PI
</div>

<?php
    echo pi() . '<br>';
    $pi = 3.14;

    if ($pi === pi()){
        echo 'Iguais <br>';
    }
    else {
        echo 'Diferentes <br>';
    }

    // Resposta
    $diferenca = $pi - pi();

    if( $diferenca <= 0.01 && $diferenca >= -0.01){
        echo "Praticamente iguais!<br>";
    }
    else {
        echo "Valor incompatível!!!<br>";
    }
