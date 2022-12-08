<?php
    require_once "6.php";

    function maior($array){
        $maior = $array[0];
        for ($i=0; $i<count($array); $i++){
            if ($array[$i] > $maior){
                $maior = $array[$i];
            }
        }

        echo '<br> Maior: '. $maior;
    }

    maior(f(10));
?>