<div class="titulo">
    Constantes
</div>

<?php
    define('TAXA_DE_JUROS', 5.9);
    echo TAXA_DE_JUROS . '<br>';
    echo $TAXA_DE_JUROS . '! <br>';
    // TAXA_DE_JUROS = 2.5;
    
    const NOVA_TAXA = 3.8;
    echo NOVA_TAXA . '<br>';

    $valorVariavel = 7.2;
    define('NOVISSIMA_TAXA', $valorVariavel);
    echo NOVISSIMA_TAXA . '<br>';

    echo PHP_VERSION . '<br>';
    echo PHP_INT_MAX . '<br>';

    echo 'Linha: ' . __LINE__ . '<br>';
    echo 'Arquivo: ' . __FILE__ . '<br>';
    echo 'Diretório: ' . __DIR__ . '<br>';