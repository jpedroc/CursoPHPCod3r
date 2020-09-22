<div class="titulo">
    Laço For
</div>

<?php
    for($cont = 1; $cont <= 5; $cont++) {
        echo "$cont <br>";
    }
    echo "<hr>";
    for(; $cont <= 10; $cont++) {
        echo "$cont <br>";
    }
    echo "<hr>";
    for( ;$cont <= 15;) {
        echo "$cont <br>";
        $cont++;
    }

    echo "<hr>";
    $array = ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];
    print_r($array);
    echo '<br>';

    for($i = 0; $i < count($array); $i++) {
        echo "{$array[$i]} <br>";
    }

    echo "<hr>";
    $matriz = [
        ['a', 'e', 'i', 'o', 'u'],
        ['b', 'c', 'd', 'f', 'g']
    ];

    for($i = 0; $i < count($matriz); $i++){
        for($j = 0; $j < count($matriz[$i]); $j++){
            echo "{$matriz[$i][$j]} ";
        }
        echo '<br>';
    }
