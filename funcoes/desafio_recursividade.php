<div class="titulo">
    Desafio Recursividade
</div>

<?php
    /*
        $array = [1, 2, [3, 4, 5], 6, [7, [8, 9]], 10];
        > 1
        > 2
        >> 3
        >> 4
        >> 5
        > 6
        >> 7
        >>> 8
        >>> 9
        > 10
    */

    $array = [1, 2, [3, 4, 5], 6, [7, [8, 9]], 10];

    function printarArray($array, $nivel = '>'){
        foreach($array as $elem) {
            if(is_array($elem)){
                printarArray($elem, $nivel . $nivel[0]);
            }
            else {
                echo "$nivel $elem<br>";
            }
        }
    }

    printarArray($array);
    printarArray($array, '/');