<div class="titulo">
    Desafio Data
</div>

<?php
    class Data {

        public $dia = "01";
        public $mes = "01";
        public $ano = "1970";

        public function apresentar() {
            return "{$this->dia}/{$this->mes}/{$this->ano}";
        }
    }

    $dataPadrao = new Data();
    echo $dataPadrao->apresentar() . '<br>';

    $aniversario = new Data();
    $aniversario->dia = "21";
    $aniversario->mes = "02";
    $aniversario->ano = "2000";
    echo $aniversario->apresentar() . "<br>";