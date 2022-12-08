<?php

    // a)
    $texto = 'Texto';
    $numero = 10.5;
    $booleano = true;
    $array = array(2, 'legal', true);

    // b)
    10 + 5; // soma
    10 - 5; // subtração
    10 * 5; // multiplicação
    10 / 5; // divisão

    // c)
    10 > 5; // maior que
    10 >= 5; // maior ou igual que
    5 < 10; // menor que
    5 <= 10; // menor ou igual que
    5 == '5'; // igual
    5 === 5; // identico
    5 <> 10; // diferente
    5 != 10; // diferente
    5 !== 10; // não identicos

    // d)
    $a = true;
    $b = true;

    $a and $b; // E;	Verdadeiro (true) se tanto $a quanto $b são verdadeiros
    $a && $b; // E;	    Verdadeiro (true) se tanto $a quanto $b são verdadeiros
    $a or $b; // OU;	Verdadeiro se $a ou $b são verdadeiros.
    $a || $b; // OU;	Verdadeiro se $a ou $b são verdadeiros.
    $a xor $b; // XOR;	Verdadeiro se $a ou $b são verdadeiros, mas não ambos.
    !$a; // Verdadeiro se $a não é verdadeiro.  

    if ($a && $b){
        echo 'Ambos Verdadeiros <br>';
    }
    if ($a || $b){
        echo 'Um deles Verdadeiro <br>';
    }
    if (!$a){
        echo '$a é falso';
    }


    // e)
    $i = 0;
    $i++; // i + 1

    for ($i; $i<=5; $i++){
        echo '<br> Item '.$i;
    }

    // f)
    // +=, -=, *=, /=,%=, .=

    $a = 10;
    for ($i=0; $i<=5; $i++){
        echo '<br>' . ($a+=5); // adiciona 5 à $a cada vez
    }

    // g) 
    $idade = 17;
    echo '<br> Olá, sou o pedro. Tenho ' . $idade . ' anos. <br><br>'; // O . concatena

    // h)
    echo 2 == '2' ? 'verdadeiro' : 'falso';


    echo '<br> <br>';
    

    // i)
    print_r($_REQUEST);
?>

<!DOCTYPE html>
<html>
    <body>
        <form action="2.php" method="get">
            <br>
            <input type="number" value=0 name='numero'>
            <input type="submit">
        </form>
        <?php
            if(isset($_GET['numero'])){
                $n = $_GET['numero'];
            }
            else{
                $n = 0;
            }

            echo abs($n);
        ?>
    </body>
</html>