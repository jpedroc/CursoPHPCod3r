<div class="titulo">
    Includes Função
</div>

<?php
    echo "Linha antes da inclusão<br>";

    function incluir() {
        include("include_arquivo.php");

        echo $var, '<br>';
        echo soma(7, 3), '<br>';
    };

    echo "Linha depois da função<br>";
    // echo soma(10, 15), "<br>";

    incluir();

    echo "Variavel = " . $var . "<br>";
    echo soma(13, 15) . "<br>";