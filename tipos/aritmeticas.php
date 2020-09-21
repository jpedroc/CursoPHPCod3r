<div class="titulo">
    Operações Aritméticas
</div>

<?php 
    echo 1 + 1, '<br>';

    var_dump(1+1);
    echo '<br>';

    echo 1 + 2.5, '<br>';
    echo 10 - 2, '<br>';
    echo 10 / 2, '<br>';
    echo 10 * 2, '<br>';

    echo 10 * 2 - 4 / 4, '<br>';

    echo intdiv(10, 3), '<br>';
    echo round(10 / 6), '<br>';

    echo 7 % 2, '<br>';
    echo 4 ** 2, '<br>';

    // PRECEDÊNCIA
    // () => ** => / * % => - + 

    echo '<br><p>Precedência</p>';
    echo 2 + 3 * 2 - 4 / 2 ** 2, '<br>';
    echo  2 ** 10 * 3 / 5 - 2 * 1.5, '<br>';
    echo (2 * 3 + 4) / 2 ** 2, '<br>';
    echo (2 * 3 + 4) / (10 ** 2 / 2 - 3 * 15), '<br>';