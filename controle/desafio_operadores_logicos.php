<div class="titulo">
    Desafio Operadores Lógico
</div>
<!-- 
    Dois trabalhos -> Terça e Quinta
    * Se os dois trabalhos forem realizados -> TV 50' e sorvete
    * Se apenas um dos trabalhos forem realizados -> TV 32' e sorvete
    * Se nenhum dos trabalhos forem realizados -> Ficar em casa mais saudável
-->

<form action="#" method="POST">
    <div>
        <label for="t1">Trabalho 1 (Terça):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
    button, select {
        font-size: 1.8rem;
    }
</style>

<?php
    $t1 = $_POST['t1'];
    $t2 = $_POST['t2'];

    echo "<br><strong>O que iremos fazer no final de semana: </strong>";
    if($t1 && $t2){
        echo "Iremos comprar uma TV 50' e tomar sorvete!<br>";
    }
    else if($t1 || $t2){
        echo "Iremos comprar uma TV 32' e tomar sorvete!<br>";
    }
    else {
        echo "Iremos ficar em casa!<br>";
    }
