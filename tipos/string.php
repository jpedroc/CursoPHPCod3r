<div class="titulo">
    Tipo String
</div>

<?php 
    echo 'Eu sou uma string!', '<br>';
    var_dump("Eu também!");
    echo '<br>';


    // concatenação
    echo "NÓS" . " TAMBÉM " . "SOMOS";
    echo '<br>', 'Também aceito', ' virgulas!', '<br>';
    echo "'Teste' " . '"Teste" ' . '\'Teste\' ' . "\"Teste\"", '<br>';

    print("Tambem existe a função print!<br>");
    print "Tambem existe a função print!<br>";

    // algumas funções
    echo strtoupper('maximizado'), '<br>';
    echo strtolower('MINIMIZADO'), '<br>';
    echo ucfirst('primeira letra'), '<br>';
    echo ucwords('primeira letra de cada palavra'), '<br>';
    echo strlen('Eu também'), '<br>';
    echo mb_strlen('Eu também', 'utf-8'), '<br>'; // considera encodes
    echo substr('Só uma parte mesmo', 7, 6), '<br>'; // string, indice inicial (incluido), total de casas(ultima casa não está inclusa)
    echo substr('Só uma parte mesmo', 7), '<br>';
    echo str_replace('isso', 'aquilo', 'Trocar isso'), '<br>'; // busca, troca, string