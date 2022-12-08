<?php

    function inverter($url){
        return strrev($url);
    }

    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
        $url = "https://";   
    else  
        $url = "http://";   
  
    $url.= $_SERVER['HTTP_HOST'];   
  
    $url.= $_SERVER['REQUEST_URI'];    

    $urlInvertida = inverter($url);
    echo $urlInvertida;  

?>