<div class="titulo">
    Desafio For
</div>

<!-- 
    #
    ##
    ###
    ####
    #####
 -->

<?php
    $var = "#";
    for($cont = 0; $cont < 5; $cont++) {
        echo $var;
        $var .= '#';
        echo "<br>"; 
    }
    echo '<hr>';
    $var = "#";
    for(; strlen($var) <= 5;) {
        echo $var;
        $var .= '#';
        echo "<br>"; 
    }