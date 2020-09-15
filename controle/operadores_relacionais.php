<div class="titulo">
    Operadores Relacionais
</div>

<?php
    echo var_dump(1 == 1) . '<br>';
    echo var_dump(1 > 1) . '<br>';
    echo var_dump(1 >= 1) . '<br>';
    echo var_dump(4 <= 23) . '<br>';
    echo var_dump(1 <= 7) . '<br>';
    echo var_dump(1 != 1) . '<br>';
    echo var_dump(1 <> 1) . '<br>';

    echo var_dump(1 == '1') . '<br>';
    echo var_dump(1 === '1') . '<br>';
    echo var_dump(11 !== '11') . '<br>';
    echo var_dump(11 != '11') . '<br>';

    echo "<p class='divisao'>Relacionais no If Else </p><hr>";
    $idade = 80;
    if($idade < 18) {
        echo "Menor de idade = $idade anos <br>";
    }
    else if ($idade <= 65) {
        echo "Adulto = $idade anos<br>";
    }
    else {
        echo "Terceira Idade = $idade anos<br>";
    }

    echo "<p class='divisao'>Spaceship</p><hr>";
    echo var_dump(5 <=> 3) . '<br>';
    echo var_dump(10 <=> 10) . '<br>';
    echo var_dump(5 <=> 10) . '<br>';

    echo "<p class='divisao'>Valores Verdadeiro ou Falso</p><hr>";
    echo var_dump(!!5) . '<br>';
    echo var_dump(!!0) . '<br>';
    echo var_dump(!!"") . '<br>';
    echo var_dump(!!" ") . '<br>';
