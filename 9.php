<?php

    function merge($array1, $array2){
        return array_merge($array1, $array2);
    }

    $array1 = array('gato', 'cachorro');
    $array2 = array('maçã', 'banana');
    
    print_r(merge($array1, $array2));

?>