<div class="titulo">
    Desafio Palindromo
</div>  

<?php
   function verificarPalindromoFor($palavra) {   
    echo "'$palavra' ";  
    $palavra = str_replace(" ", "", strtolower($palavra)); 

    $cont2 = strlen($palavra) - 1;
       for($cont=0; $cont < strlen($palavra); $cont++) {
           if($palavra[$cont] != $palavra[$cont2]) {
               return "não é palindromo!";
           }
           $cont2--;
       }
       return "é palindromo!";
   } 

   function verificarPalindromeStr($palavra) {
       echo "'$palavra' ";
       $palavra = str_replace(" ", "", strtolower($palavra));
       return $palavra == strrev($palavra) ? "é palindromo!" : "não é palindromo";
   }

   echo "Verificando com For: ";
   echo verificarPalindromoFor("Roma me tem amor"), '<br>';
   echo "Verificando com método str: ";
   echo verificarPalindromeStr("Roma me tem amor"), '<br>';



   