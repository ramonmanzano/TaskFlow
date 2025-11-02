<?php

//Problema 1: Calculadora de Descuentos 
function CalculadoraDescuento($precio,$categoria){
    $descuentoElectronica = $precio * 0.15;
    $descuentoRopa = $precio * 0.10;
    $descuentoAlimentacion = $precio * 0.05;

    if($categoria === 'electronica'){
        echo $descuentoElectronica;
    } else if($categoria === 'ropa'){
        echo $descuentoRopa;
    } else if($categoria === 'alimentacion'){
        echo $descuentoAlimentacion;
    } else {
        echo 0;
    }
}

CalculadoraDescuento(10,'electronica');

CalculadoraDescuento(10,'ropa');

CalculadoraDescuento(10,'alimentacion');




//Problema 2: El Juego "FizzBuzz"
function fizzbuzz($numero){

    if($numero % 3 == 0 && $numero % 5 == 0){
        echo "FizzBuzz";
    } else if($numero % 3 == 0){
        echo "Fizz";
    } else if($numero % 5 == 0){
        echo "Buzz";
    } else {
        echo $numero;
    }
}

fizzbuzz(8);

//Problema 3: Validador de Contraseña // Optimizar
function validarContrasena($pass) {
    if (strlen($pass) > 8 && $pass != strtolower($pass) &&
        (strpos($pass,"0")!==false || strpos($pass,"1")!==false || strpos($pass,"2")!==false ||
         strpos($pass,"3")!==false || strpos($pass,"4")!==false || strpos($pass,"5")!==false ||
         strpos($pass,"6")!==false || strpos($pass,"7")!==false || strpos($pass,"8")!==false ||
         strpos($pass,"9")!==false)
    ) {
        echo "FUERTE";
    } else if(strlen($pass) > 8){
        echo "MEDIA";
    } else {
        echo "DEBIL";
    }
}

//Nivel 2: Manipulación Avanzada de Arrays
//Problema 4: Encontrar el Valor Máximo

function encontrarMaximo($array) {
    $maximo = $array[0];
    foreach($array as $arraycito){
        if($arraycito > $maximo){
            $maximo = $arraycito;
        }
    }
    echo $maximo;
}

$numeros = [1, 2, 3, 4, 5, 6, 7];
encontrarMaximo($numeros);


//Problema 5: Filtrar Usuarios por Criterio(volver a repasar y rehacer por mi cuenta sin tanta ayuda) este ejercicio en especifico

<?php
$usuarios = [
    ['nombre' => 'Ana', 'edad' => 25, 'activo' => true],
    ['nombre' => 'Juan', 'edad' => 17, 'activo' => true],
    ['nombre' => 'Pedro', 'edad' => 35, 'activo' => false],
    ['nombre' => 'Sofía', 'edad' => 22, 'activo' => true]
];

echo "Personas mayores mayores:  ";

foreach($usuarios as $usuario){
    if($usuario['edad'] >= 18 && $usuario['activo'] === true){
        echo $usuario['nombre'] . " ";
    }
}

echo "\n";
?>


?>







?>