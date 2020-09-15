<div class="titulo">
    Valor vs Referência
</div>

<?php
    $variavel = "Valor inicial";
    echo $variavel . '<br>';
    
    // Atribuição por valor
    $variavelValor = $variavel;
    echo $variavelValor . '<br>';
    $variavelValor = "Outro valor";
    echo $variavelValor . '<br>';

    // Atribuição por referência
    $variavelReferencia = &$variavel;
    echo $variavelReferencia . '<br>';
    $variavelReferencia = "Mesma referência";
    echo $variavelReferencia . '<br>';
    echo $variavel . '<br>';

