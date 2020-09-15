<div class="titulo">
    Conversões
</div>

<?php
    echo is_int(PHP_INT_MAX) . '<br>';
    
    // INT PARA FLOAT
    echo '<p>Int para Float</p>';
    echo var_dump(PHP_INT_MAX + 1) . '<br>';
    echo var_dump(1 + 1.0) . '<br>';
    echo var_dump((float) 3 ) . '<br>';
    
    // FLOAT PARA INT
    echo '<p>Float para Int</p>';
    echo var_dump((int) 2.8) . '<br>';
    echo var_dump(intval(3.7)) . '<br>';
    echo var_dump((int) round(7.5)) . '<br>';

    // CONVERSÕES COM STRING
    echo '<p>Strings</p>';
    echo var_dump(3 + '2') . '<br>';
    echo var_dump('3' + 2) . '<br>';
    echo var_dump('3' . 2) . '<br>';
    echo is_string('3' . 2) . '<br>';
    // echo is_string('3' + 2) . '<br>';
    echo var_dump(5 + 'oito') . '<br>';
    echo var_dump(5 + '8 oito') . '<br>';
    echo var_dump(5 + '8 + 3') . '<br>';
    echo var_dump(5 + '8.3') . '<br>';
    echo var_dump(1 + '-3.2e2') . '<br>';
    echo var_dump((int) "3.15") . '<br>';
    echo var_dump((float) "3.15") . '<br>';

