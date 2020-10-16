<div class="titulo">
    Usando TIpos
</div>

<?php 
    function somar1($var1, $var2) {
        echo "<span>Somando $var1 + $var2 = </span>";
        return $var1 + $var2;
    }

    echo somar1(3, 4) . '<br>';
    echo somar1(3.4, 4.3) . '<br>';
    echo somar1(3, '4dois') . '<br>';

    echo '<br>';

    function somar2(int $var1, int $var2) {
        echo "<span>Somando $var1 + $var2 = </span>";
        return $var1 + $var2;
    }

    echo somar2(3, 4) . '<br>';
    echo somar2(3.4, 4.3) . '<br>';
    echo somar2(3, '4dois') . '<br>';

    echo '<br>';

    function somar3($var1, $var2): int {
        echo "<span>Somando $var1 + $var2 = </span>";
        return $var1 + $var2;
    }

    echo somar3(3, 4) . '<br>';
    echo somar3(3.4, 4.3) . '<br>';
    echo somar3(3, '4dois') . '<br>';