<div class="titulo">
    Mapa
</div>

<?php
    $dados = array (
        "idade" => 25,
        "cor" => "verde",
        "peso" => 49.8
    );
    print_r($dados);
    echo '<br>';
    echo var_dump($dados[0]) . '<br>';
    echo $dados["idade"] . '<br>';
    echo $dados["cor"] . '<br>';
    echo $dados["peso"] . '<br>';
    echo var_dump($dados["outra_info"]) . '<br>';

    $lista = array(
        "a",
        "cinco" => "b",
        "c",
        8 => "d",
        "e",
        6 => "f",
        "g",
        8 => "h"
    );

    print_r($lista);

    $lista[] = "i";
    echo '<br>';
    print_r($lista);

    $lista["vinte"] = "j";
    echo '<br>';
    print_r($lista);

    $lista[false] = "Tentei indexar com False!";
    echo '<br>';
    print_r($lista);

    $lista[true] = "Tentei indexar com True!";
    echo '<br>';
    print_r($lista);