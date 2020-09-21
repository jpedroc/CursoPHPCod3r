<div class="titulo">
    Array
</div>

<?php
    $lista = array(1, 2, 3.4, "texto");
    echo $lista . '<br>';
    echo var_dump($lista) . '<br>';
    print_r($lista);

    $lista[0] = 21;

    echo '<br>' . $lista[0] . '<br>';
    echo $lista[1] . '<br>';
    echo $lista[2] . '<br>';
    echo $lista[3] . '<br>';
    echo var_dump($lista[10]) . '<br>';

    $texto = "Esse é um texto de texte!";
    echo $texto[0] . '<br>';
    echo $texto[2] . '<br>';
    echo $texto[11] . '<br>';
    echo mb_substr($texto, 10, 1) . '<br>';

    