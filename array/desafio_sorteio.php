<div class="titulo">
    Desafio Sorteio
</div>

<?php
    $nomes = ["Elza", "Rapunzel", "Cinderela", "Branca de Neve"];
    $nomeSelecionado = $nomes[array_rand($nomes)];
    echo "<h1 center>$nomeSelecionado</h1>";

?>

<style>
    [center] {
        display: flex;
        justify-content: center;
    }
</style>