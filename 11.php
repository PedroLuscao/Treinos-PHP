<?php

function reverter($array){
        $rarray = array();
        $j = 0;
        for ($i = count($array) - 1; $i >= 0; $i--){
            $rarray[$j] = $array[$i]; 
            $j++;
        }
        return $rarray;
    }



    $array = array('gato', 'cachorro', 'maçã', 'banana');
    
    print_r(reverter($array));

?>