<div class="titulo">
    $_POST
</div>

<form action="#" method="post">
    <input type="text" placeholder="Nome" name="nome">
    <input type="text" placeholder="Sobrenome" name="sobrenome">
    <select name="estado" >
        <option value="ES">Espírito Santo</option>
        <option value="MG">Minas Gerais</option>
        <option value="SP">São Paulo</option>
    </select>

    <button>Enviar</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php
    print_r($_GET);
    echo '<br>';
    print_r($_POST);
    echo '<br>' . count($_POST);