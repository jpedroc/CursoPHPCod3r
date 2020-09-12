<div class="titulo">
    Desafio Precedência
</div>

<?php
    echo '<p>1. Qual será o valor impresso?</p>';
    echo 2 + 5 * 3 + (12 / 6 ) / (-8 + 2 ** 3); // inf

    echo '<p>2. Qual a expressão que imprime o valor 100?</p>';
    echo 'a) ', (1 + 2) * 20 - 15, '<br>';
    echo 'b) ', 4 * 5 ** 2, '<br>'; // resposta correta
    echo 'c) ', 2 ** 3 ** 4 / 1e25, '<br>';
    echo 'd) ', 3 + (3 * 8) / 2 - 3, '<br>';
