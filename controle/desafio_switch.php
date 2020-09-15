<div class="titulo">
    Desafio Switch
</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metro-km">Metro > Km</option>
        <option value="km-metro">Km > Metro</option>
        <option value="celsius-fahre">Celsius > Fahrenheit</option>
        <option value="fahre-celsius">Fahrenheit > Celsius</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php
    define('FATOR_KM_MILHA', 0.62137);
    define('FATOR_KM_METROS', 1000);
    define('FATOR_CELSIUS_FAHRE', 1.8);
    $valorInicial = $_POST['param'] ?? 0;
    $conversor = $_POST['conversao'];
    $valorConvertido;
    
    switch($conversor){
        case 'km-milha':
            $valorConvertido = $valorInicial * FATOR_KM_MILHA;
            break;
        case 'milha-km':
            $valorConvertido = $valorInicial / FATOR_KM_MILHA;
            break;
        case 'km-metro':
            $valorConvertido = $valorInicial * FATOR_KM_METROS;
            break;
        case 'metro-km':
            $valorConvertido = $valorInicial / FATOR_KM_METROS ;
            break;
        case 'celsius-fahre':
            $valorConvertido = ($valorInicial * FATOR_CELSIUS_FAHRE) + 32;
            break;
        case 'fahre-celsius':
            $valorConvertido = ($valorInicial - 32) / FATOR_CELSIUS_FAHRE;
            break;
    }

    echo "<p><strong>O valor convertido é:</strong> $valorConvertido.</p>";
