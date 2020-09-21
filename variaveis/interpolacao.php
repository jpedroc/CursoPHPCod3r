<div class="titulo">
    Interpolação
</div>

<?php
    $numero = 10;
    echo $numero . '<br>';
    echo '$numero <br>';
    echo "$numero <br>";

    $texto = "A sua nota é: $numero. <br>";
    echo $texto;

    $objeto = "caneta";
    echo "Eu tenho 5 $objetos <br>";
    echo "Eu tenho 5 {$objeto}s. <br>";
    echo "Eu tinha 5 { $objeto}s e perdi 3 {$objeto }s. <br>";