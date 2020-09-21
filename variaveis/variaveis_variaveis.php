<div class="titulo">
    Variáveis Variáveis
</div>

<?php
    $a = "ValorA";
    $$a = "ValorAA";
    echo "$a {$$a} ${$a} $ValorA <br>";

    $epa = 'opa';
    $opa = 'vish';
    $vish = 'eita';

    echo "$epa - {$$epa} - {$$$epa} <br>";
    echo "$epa - ${$epa} - ${$$epa} <br>";
    echo "$opa - {$$opa} <br>";
