<div class="titulo">
    Argumento Padrão
</div>

<?php
    function saudacao($nome = "Senhor(a)", $sobrenome = "Cliente") {
        return "Bem vindo, $nome $sobrenome!<br>";
    }

    echo saudacao();
    echo saudacao(NULL);
    echo saudacao(NULL, NULL);
    echo saudacao("Mestre", "Supremo");

    echo '<br>';

    function anotarPedido($comida, $bebida = "Água") {
        echo "Para comer: $comida <br>";
        echo "Para beber: $bebida <br>";
    }

    anotarPedido('Pizza');
    anotarPedido('X-Tudo', 'Refrigerante');

    function anotarPedido2($bebida = "Água", $comida) {
        echo "Para comer: $comida <br>";
        echo "Para beber: $bebida <br>";
    }

    echo '<br>';

    // anotarPedido2('Pizza');
    anotarPedido2('X-Tudo', 'Refrigerante');