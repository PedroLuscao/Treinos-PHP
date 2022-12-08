<?php

    function areaRetangulo($base, $altura){
        return $base * $altura;
    }
    function perRetangulo($base, $altura){
        return ($base * 2) + ($altura * 2);
    }

    function areaTriangulo($base, $altura){
        return ($base * $altura)/2;
    }
    function perTriangulo($lado1, $lado2, $lado3){
        return ($lado1 + $lado2 + $lado3);
    }

    function areaCirculo($raio){
        return pi() * ($raio * $raio);
    }
    function perCirculo($raio){
        return (2*pi()) * $raio;
    }

    echo "-----Retangulo-----<br>";
    echo areaRetangulo(5, 5)."<br>";
    echo perRetangulo(5,5)."<br>";
    echo "<br>-----Triangulo-----<br>";
    echo areaTriangulo(5, 4)."<br>";
    echo perTriangulo(5,5,5)."<br>";
    echo "<br>-----Circulo-----<br>";
    echo areaCirculo(5)."<br>";
    echo perCirculo(5)."<br>";

?>