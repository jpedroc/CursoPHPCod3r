<div class="titulo">
    Include
</div>

<?php
    echo "Linha antes da inclusão<br>";
    include('include_arquivo.php');

    echo soma(7, 3);
    echo "<br>Valor variavel: {$var}";