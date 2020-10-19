<div class="titulo">
    Map & Filter
</div>

<?php
    $notas = [5.8, 9.3, 4.5, 6.2, 5.9, 10, 3.7, 7.9];
    $notasFinais1 = [];
    
    foreach($notas as $nota) {
        $notasFinais1[] = round($nota);
    }

    print_r($notasFinais1);

    echo "<br>";

    $notasFinais2 = array_map(round, $notas);
    print_r($notasFinais2);

    $apenasOsAProvados1 = [];

    foreach($notas as $nota) {
        if($nota >= 6) {
            $apenasOsAProvados1[] = $nota;
        }
    }

    echo '<br>';
    print_r($apenasOsAProvados1);

    function aprovados($nota) {
        return $nota >= 6;
    }

    $apenasOsAProvados2 = array_filter($notas, aprovados);
    echo '<br>';
    print_r($apenasOsAProvados2);

    function calculoLegal($nota) {
        $notaArredondada = round($nota) + 1;
        return $notaArredondada > 10 ? 10 : $notaArredondada;
    }

    $notasFinais3 = array_map(calculoLegal, $notas);
    echo '<br>';
    print_r($notasFinais3);