<div class="titulo">
    Arrays Constantes
</div>

<?php
    const FRUTAS = ['Laranja', 'Morango', 'Abacaxi'];
    // FRUTAS[0] = 'maçã';
    // FRUTAS[] = 'maçã';
    echo FRUTAS[array_rand(FRUTAS)] . '<br>';

    const CARROS = ['fiat' => 'Uno', 'ford' => 'Fiesta'];
    // CARROS['volkswagen'] = 'Golf';
    echo CARROS['fiat'] . '<br>';

    define('CIDADES', array('Baixo Guandu', 'Vitória', 'Colatina'));
    // CIDADES[] = 'Fundão';
    echo CIDADES[2] . '<br>';
