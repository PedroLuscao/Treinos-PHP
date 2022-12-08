<?php

function intercalar($array1, $array2){
        $array = array();
        $c = 0;
        for ($i=0; $i<count($array1); $i++){
                $array[$c] = $array1[$i];
                $c++;
                $array[$c] = $array2[$i];
                $c++;
        }
        return $array;
    }



    $array1 = array('gato', 'cachorro');
    $array2 = array('maçã', 'banana');
    
    print_r(intercalar($array1, $array2));

?>