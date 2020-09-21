<div class="titulo">
    Multidimensionais
</div>

<?php
    $dados = [
        "pessoa1" => [
            "nome" => "João Pedro",
            "idade" => 20,
            "naturalidade" => "Espírito Santo"
        ],
        "pessoa2" => [
            "nome" => "Flavio",
            "idade" => 21,
            "naturalidade" => "Goias"
        ],
        "pessoa3" => [
            "nome" => "Maria",
            "idade" => 19,
            "naturalidade" => "Minas Gerais"
        ],
    ];

    print_r($dados);
    echo '<br>';

    print_r($dados["pessoa1"]["nome"]);
    echo '<br>';

    print_r($dados["pessoa3"]);
    echo '<br>';

    $dados["pessoa4"] = [
        "nome" => "Luiz",
        "idade" => 22,
        "naturalidade" => "Bahia"
    ];

    print_r($dados);
    echo '<br>';

    $dados["pessoa1"]["vizinho"] = "Alexia";

    print_r($dados);
    echo '<br>';

    unset($dados["pessoa2"]);
    print_r($dados);
    echo '<br>';