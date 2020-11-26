<div class="titulo">
    Include vs Require
</div>

<?php
    ini_set('display_errors', 1);
    
    echo "Usando include com arquivo inexistente...<br>";
    include("arquivo_x.php");

    echo "Usando require com arquivo inexistente...<br>";
    require("arquivo_x.php");

    echo "Não achou o arquivo";