<div class="titulo">
    Desafio Include
</div>

<?php
    include_once('include_jetta.php');

    $jetta = new Jetta();
    $jetta->chassi = '192312931';
    $jetta->cor = 'preta';
    $jetta->marca = 'Volkswagen';
    $jetta->acessorios = ['ar', 'vidro elétrico', 'som', 'liga leve', 'alarme', 'sensor de ré'];

    $jetta->info();