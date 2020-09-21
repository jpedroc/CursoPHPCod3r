<div class="titulo">
    Operadores Lógicos
</div>

<?php 
    echo "<p class='divisao'>Negação Lógica</p><hr>";
    echo var_dump(true) . '<br>';
    echo var_dump(!true) . '<br>';
    
    echo "<p class='divisao'>Tabela Verdade 'AND' (E)</p><hr>";
    echo var_dump(true && true) . '<br>';
    echo var_dump(true and false) . '<br>';
    echo var_dump(false && true) . '<br>';
    echo var_dump(false and false) . '<br>';

    echo "<p class='divisao'>Tabela Verdade 'OR' (OU)</p><hr>";
    echo var_dump(true || true) . '<br>';
    echo var_dump(false or true) . '<br>';
    echo var_dump(true || false) . '<br>';
    echo var_dump(false or false) . '<br>';

    echo "<p class='divisao'>Tabela Verdade 'XOR' (OU EXCLUSIVO)</p><hr>";
    echo var_dump(true xor true) . '<br>';
    echo var_dump(false != true) . '<br>';
    echo var_dump(true xor false) . '<br>';
    echo var_dump(false != false) . '<br>';

    echo "<p class='divisao'>Exemplo</p><hr>";
    $idade = 65;
    $sexo = "M";
    $pagouPrevidencia = true;
    $criterioIdadeSexo = ($idade >= 60 && $sexo === 'F') || ($idade >= 65 && $sexo === 'M');
    $podeSeAposentar = $pagouPrevidencia && $criterioIdadeSexo;

    if($podeSeAposentar){
        echo "Pode se aposentar! Sexo -> $sexo<br>";
    }
    else {
        echo 'Vai ter que trabalhar mais um pouco...<br>';
    }
