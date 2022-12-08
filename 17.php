<?php

    function palindromo($palavra){
        if(strtolower($palavra) == strrev(strtolower($palavra))){
            echo $palavra." é palíndromo!";
        }
        else{
            echo $palavra." não é palíndromo!";
        }
    }

    
    palindromo("Sopapos");


?>