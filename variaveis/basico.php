<div class="titulo">
    Variáveis
</div>

<?php
$numeroA = 13;
echo $numeroA . '<br>';
echo var_dump($numeroA) . '<br>';

$numeroB = 3;
$soma = $numeroA + $numeroB;
echo $soma, '<br>';

echo isset($soma) . '<br>';
unset($soma);
echo var_dump($soma) . '<br>';

$variavel = 10;
echo $variavel . '<br>';

$variavel = "Agora sou uma String!";
echo $variavel . '<br>';

// nomes de variáveis
$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida';
$_var_4 = 'valida';
$vâr5 = 'valida'; // evitar!
// $6var = 'inválida';
// $%var7 = 'inválida';
// $var%8 = 'inválida';

echo '<br>' . var_dump($_SERVER["HTTP_HOST"]);

