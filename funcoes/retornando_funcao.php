<div class="titulo">
    Retornando Função
</div>

<?php
    function soma($var1) {
        return function ($var2) use($var1) {
            return $var1 + $var2;
        };
    }

    echo soma(3)(2);

    $sete = soma(7);

    echo '<br>' . $sete(13);
    echo '<br>' . $sete(3);