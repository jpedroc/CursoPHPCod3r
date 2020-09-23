<div class="titulo">
    Desafio Tabela #02
</div>

<form action="#" method="post">
    <span>Linhas</span>
    <input type="number" name="nr_linhas">
    <span>Colunas</span>
    <input type="number" name="nr_colunas">
    <button>Gerar Tabela</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }

    table {
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }
    
    table tr {
        border: 1px solid #444;
    }

    table td {
        padding: 10px 20px;
    }
</style>

<?php
    $linhas = intval($_POST['nr_linhas']);
    $colunas = intval($_POST['nr_colunas']);

    if(!$linhas) $linhas = 1;
    if(!$colunas) $colunas = 1;

    $valor = 1;
?>

<table>
    <?php
        for($l = 0; $l < $linhas; $l++) {
            echo "<tr>";
            for($c = 0; $c < $colunas; $c++) {
                echo "<td>$valor</td>";
                $valor++;
            }
            echo '</tr>';
        }
    ?>
</table>