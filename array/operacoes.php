<div class="titulo">
    Operações
</div>

<?php
    $dados1 = [
        "nome" => "José",
        "idade" => 28
    ];

    $dados2 = [
        "naturalidade" => "Fortaleza"
    ];

    $dados2["endereco"] = "Rua Fulano de Tal"; 

    $dadosCompletos = $dados1 + $dados2;
    print_r($dadosCompletos);

    echo '<br>';
    echo is_array($dadosCompletos) . '<br>';
    echo count($dadosCompletos) . '<br>';

    $indice = array_rand($dadosCompletos);
    echo "$indice = $dadosCompletos[$indice] <br>";

    echo "{$dadosCompletos['idade']} ";
    echo "${dadosCompletos['idade']} <br>";

    unset($dadosCompletos['nome']);
    print_r($dadosCompletos);
    echo '<br>';

    unset($dadosCompletos);
    var_dump($dadosCompletos);
    echo '<br>';

    $impares = [1, 3, 5, 7, 9];
    $pares = [0, 2, 4, 6, 8];

    $decimais = $pares + $impares;
    print_r($decimais);
    echo '<br>';

    $decimais = array_merge($pares, $impares);
    print_r($decimais);
    echo '<br>';

    sort($decimais);
    print_r($decimais);
    echo '<br>';

    $indice = ["nome", "sobrenome", "idade"];
    $dados = ["João Pedro", 'Calixto', 20];

    $dadosCompletos = array_combine($indice, $dados);
    print_r($dadosCompletos);
