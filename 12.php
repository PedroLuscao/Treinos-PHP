<?php

    function separar($texto){
        $array = explode(" ", $texto);
        return $array;
    }

    print_r(separar("Ola Mundo Bonito"));


?>