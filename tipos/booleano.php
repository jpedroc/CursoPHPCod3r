<div class="titulo">
    Tipo Booleano
</div>

<?php
    echo TRUE, '<br>';
    echo FALSE;

    echo var_dump(true) . '<br>';
    echo var_dump(false) . '<br>';
    echo var_dump('false') . '<br>';
    echo is_bool(false) . '<br>';
    echo is_bool('true') . '<br>';

    // fazer as regras de conversões
    echo '<p>Regras:</p><br>';
    echo var_dump((bool) 0) . '<br>';
    echo var_dump((bool) 20) . '<br>';
    echo var_dump((bool) -1) . '<br>';
    echo var_dump((bool) 0.0) . '<br>';
    echo var_dump((bool) 0.0000001) . '<br>';
    echo var_dump((bool) "") . '<br>';
    echo var_dump((bool) " ") . '<br>';
    echo var_dump((bool) "0") . '<br>';
    echo var_dump(!"00") . '<br>';
    echo var_dump(!!"00") . '<br>';