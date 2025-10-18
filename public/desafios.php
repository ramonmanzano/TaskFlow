<?php
////////////////////////FACILES///////////////////////////

///////Categoría 1: Variables y Tipos de Datos (Dificultad: Baja)
//Problema 1.1: Perfil de Usuario

$Nombre="Ramon";
$Apellidos="Manzano Alonso";
$Edad=20;
$Altura=1.78;
$estudiante=true;

echo "El alumno con nombre ".$Nombre.".\n";
echo "El alumno con apellidos ".$Apellidos.".\n";
echo "Con la edad ".$Edad."\n";
echo "Con la altura ".$Altura."\n";
echo "Es estudiante? ".$estudiante."\n";

if($estudiante===true){
    echo "Sí"."\n";
}


///////Problema 1.2: Información de un Producto

$NombreDelProducto="Producto3000";
$Precio=1.23;
$StockDisponible=4;
$EstaEnOferta=false;

if($EstaEnOferta === true){
    $oferta = "Sí";
}else{
    $oferta = "No";
}

echo "El nombre del producto es: ".$NombreDelProducto."\n";
echo "El precio es de: ".$Precio."\n";
echo "El stock disponible es de: ".$StockDisponible."\n";
echo "¿Está en oferta?: ".$oferta."\n";



///////Problema 1.3: Constantes de la Aplicación

$NOMBRE_SITIO="Mi Tienda Online";
$VERSION_APP=1.0;

echo "Nombre del sitio: ".$NOMBRE_SITIO."\n";
echo "Versión de la aplicación: ".$VERSION_APP."\n";

///////Problema 2.2: Actualización de Stock

$stock = 100;

$stock = $stock - 25;
echo $stock."\n";

$stock = $stock + 50;
echo $stock;

///////Problema 2.3: Concatenación de Textos
$nombre="Oskar";
$Apellido="Calvo";
$curso="Desarrollo web entorno servidor";

$fraseCompleta="EL profesor ".$nombre." ".$Apellido." imparte curso de ".$curso;

echo $fraseCompleta;

///////Problema 2.4: Comparaciones Simples


$edad = 20;
$edadMinima = 18;

var_dump($edad >= $edadMinima); // muestra true o false

$contrasenaGuardada = "1234";
$contrasenaUsuario = "123";

var_dump($contrasenaGuardada === $contrasenaUsuario); 



///////Problema 2.5: ¿Par o Impar?

$numero = 7;

if ($numero % 2 == 0) {
    echo "El número es par"."\n";
} else {
    echo "El número es impar"."\n";
}

////////////////////////Categoría 3: Estructuras Condicionales (Dificultad: Media)
///////Problema 3.1: Control de Acceso

$edad = 17;

if ($edad >= 18) {
    echo "Puedes pasar"."\n";
} else {
    echo "No puedes pasar"."\n";
}

///////Calificación de Examen
$nota=7.5;

if($nota>=9){
    echo "La nota es sobresaliente";
}else if($nota>7&&$nota<8.9){
    echo "La nota es notable";
}else if($nota>5 && $nota<6.9 ){
    echo "La nota es Aprobado";
}else if($nota<5){
    echo "La nota es suspenso";
}

///////Menú del Día con switch
$diaSemana="lunes";

switch($diaSemana){

    case "lunes":
        echo "lunes :"."Lentejas";
    break;

    case "martes":
        echo "martes :"."Longaniza";
    break;

    case "miercoles":
        echo "miercoles :"."Tarta de queso";
    break;

    case "jueves":
        echo "jueves :"."Pizza";
    break;

    case "viernes":
        echo "viernes :"."Pescado horno";
    break;

    default :
        echo "Hoy plato especial";
    break;

}

///////Problema 3.4: Verificación de Usuario Avanzada
$rolUsuario="admin";
$usuarioActivo=true;

if($rolUsuario==="admin" && $usuarioActivo===true){
    echo "Acceso concedido"."\n";
}else{
    echo "Acceso denegado"."\n";
}



/////////////Categoría 4: Bucles (Dificultad: Media-Alta)
///////Problema 4.1: Tabla de Multiplicar del 7
$variable=1;
for($i=0;$i<70;$i++){
    
    $contador=$i*7;

    echo $contador."\n";
}

///////Problema 4.2: Cuenta Atrás para Año Nuevo
$cuenta = 10;

while ($cuenta >= 1) {
    echo $cuenta . "\n"; 
    $cuenta--;         
}

echo "Feliz Año Nuevo";

///////Recorrer Nombres
$alumnos = ["Ana", "Juan", "Pedro", "Sofía"];

foreach ($alumnos as $alumno) {
    echo "Hola, " . $alumno . "\n";
}


///////Listado de Productos

$productos = [
    ["nombre" => "Teclado", "precio" => 50],
    ["nombre" => "Ratón", "precio" => 25],
    ["nombre" => "Monitor", "precio" => 200]
];

foreach ($productos as $producto) {
    echo "Producto:    ".$producto["Nomnbre"]."   , Precio:   ".$producto["Precio"];
}



////////////Categoría 5: Arrays (Dificultad: Alta)
///////Problema 5.1: Ficha de Usuario

$usuario = [
    "nombre" => "Ramon",

    "edad" => 20,

    "email" => "soyramonamnzano@riseup.com",

    "estudiante" => true
];

echo $usuario["nombre"];
echo $usuario["edad"];
echo $usuario["email"];
echo $usuario["estudiante"];


///////Problema 5.2: Filtrado de Notas
$notas = [8.5, 4.2, 7.0, 9.8, 5.5, 3.9];

foreach ($notas as $notitas) {
    if ($notitas >= 5) {
        echo $notitas;
    }
}

///////Problema 5.3: Lista de la Compra Avanzada

$listaCompra = [
"Frutas" => ["Manzanas", "Plátanos", "Naranjas"],
"Lácteos" => ["Leche", "Queso"],
"Limpieza" => ["Detergente", "Lejía"]
];

foreach($listaCompra as $categoria => $productos){
    echo $categoria;
    foreach($productos as $productitos){
        echo $productitos;
    }
}


///////Problema 5.4: Calculando el Total del Carrito
$productos = [
    ["nombre" => "Teclado", "precio" => 50],
    ["nombre" => "Ratón", "precio" => 25],
    ["nombre" => "Monitor", "precio" => 200]
];

$total = 0;

foreach ($productos as $producto) {
    $total = $total + $producto["precio"];
}

echo "El total que tenemos en nuestro  carrito es De".$total;





/////////////////Problemas dificiles

//Cajero Automatico
$saldo=1000;
    $pinCorrecto="1234";
    $pinUsuario="1234";
    $opcion=3;

echo "Bienvenidos al Menu del cajero"."\n";
  switch($opcion){
    case 1:
        if($pinUsuario===$pinCorrecto){
            echo "EL pin es correcto";
        }else{
           echo "Pin incorrecto Operacion cancelada"; 
        }
    break;

    case 2:
        $ingreso=50;
        $suma=$ingreso+$saldo;

        echo "Has ingresado :".$ingreso."Tu nuevo saldo es de".$saldo;
    break;

    case 3:
        $retiro=100;
        if($retiro<=$saldo){
            $resta=$saldo-$retiro;

            echo "Has retirado".$retiro."Tu nuevo saldo es de".$resta;

        }else if($resta<=0){
            echo "No hay saldo suficiente";
        }else{
            echo "Saldo insuficiente para esta operacion";
        }
    break;

    default :
        echo "Opcion no valida";
    break;

  }

///////Fibonacci
$n1 = 0;
$n2 = 1;

echo $n1 . "\n";
echo $n2 . "\n";

for($i = 3; $i <= 20; $i++){
    $n3 = $n1 + $n2;
    echo $n3 . "\n";
    
    $n1 = $n2;
    $n2 = $n3;
}

///////Palindromo (mejorar version)
$palabra="sometemos";


   if($palabra[0]===$palabra[8]){
        if($palabra[1]===$palabra[7]){
            if($palabra[2]===$palabra[6]){
                if($palabra[3]==$palabra[5]){
                    if($palabra[2]==$palabra[4]){
                        if($palabra[1]==$palabra[3]){
                            
                        }
                     }
                    }
                }
            }
        }
   
//Palindromo mejorado 
    $palabra = "sometemos";
    $inicio = 0;
    $fin = 8;

    while ($inicio < $fin) {
        if ($palabra[$inicio] != $palabra[$fin]) {
            echo "No es un palíndromo";
            exit();
        }
        $inicio++;
        $fin--;
    }

    echo "Es un palíndromo";

///////EsPrimo
$numero = 29;
$esPrimo = true;
$i = 2;

while($i < $numero){
    if($numero % $i == 0){
        $esPrimo = false;
        break;
    }
    $i++;
}

if($esPrimo){
    echo "El numero ".$numero." es primo";
}else{
    echo "El numero ".$numero." no es primo";
}

///////Piramide
$altura = 5;

for($i=1; $i<=$altura; $i++){
    for($espacios=$altura; $espacios>$i; $espacios--){
        echo " ";
    }
    for($asteriscos=1; $asteriscos<=($i*2-1); $asteriscos++){
        echo "*";
    }
    echo "\n";
?>