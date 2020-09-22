<div class="titulo">
    Desafio Impressão
</div>

<!-- 
Enunciado:
- Imprima apenas os valores do array que contém índice par
- Desafio adicional: Resolver com for e foreach
- Valores esperados: AAA, CCC, EEE
 -->

<?php
    $array = [
        'AAA',
        'BBB',
        'CCC',
        'DDD',
        'EEE',
        'FFF'
    ];

    for($cont = 0; $cont < count($array); $cont++){
        if($cont % 2 === 1){
            continue;
        }
        echo "{$array[$cont]} ";
    }

    echo '<hr>';

    foreach($array as $indice => $valor) {
        if($indice % 2 === 1){
            continue;
        }
        echo "$valor ";
    }