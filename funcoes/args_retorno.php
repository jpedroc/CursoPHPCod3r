<div class="titulo">
    Argumentos & Retornos
</div>

<?php
    function obterMensagem() {
        return "Seja bem vindo(a)!";
    }

    $mensagem = obterMensagem();
    echo $mensagem;
    echo "<br>", obterMensagem();
    echo "<br>";
    var_dump(obterMensagem());

    function obterMensagemComNome($nome) {
        return "Bem vindo, {$nome}!";
    }

    echo "<br>", obterMensagemComNome("João Pedro");

    function soma($var1, $var2){
        return $var1 + $var2;
    }

    $var1 = 13;
    $var2 = 77;
    echo "<br>", soma(4, 8);
    echo "<br>", soma(-10, 53);
    echo "<br>", soma($var1, $var2);

    function trocaValor($var, $novoValor) {
        $var = $novoValor;
    }

    $variavel = 1;
    trocaValor($variavel, 7);
    echo "<br>", $variavel; 

    function trocaValorDeVerdade(&$var, $novoValor) {
        $var = $novoValor;
    }

    trocaValorDeVerdade($variavel, 7);
    echo "<br>", $variavel;