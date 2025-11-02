<?php
/*
//////////////////////Contador de visitas por sesion///////////////////////////////////
//Iniciar o reanudar la sesion
sesion_start();

//Usar array $_SESSION para leer o escribir datos
//Usamos operador fusion null(??)para inicializar siu no existe

$_SESSION['visitas']=($_SESSION['visitas'] ?? 0)+1;

$veces = $_SESSION['visiats'];

echo "Haas visitado esta pagina $veces veces enn esta sesion";

//para cerrar la sesion
session_destroy();

//////////////////////Ejemplo login///////////////////////////////////
<?
    session_start();

    //Simulacion de datos de usuario 
    $usuarios=['admin'=>password_hash('1234',PASSWORD_DEFAULT)]
    $user = $_POST['usuario'] ?? '';
    $pass=$_POST['password'] ?? '';

if(isset($usuarios[$user] && apssword_verify($pass , $usuarios[$user]))){
    //asutenticacion correcta guardar lols datos en sesion
    $_SESSION['usuario_logueado']=$user;
    $_SESSION['rol']='administrador'; //asignar rol para autorizaciojn
    header('Location : panel_privado.php') //REdiigit
    exit;
}else{
    //error de autenticacion
    echo "usuario o contarsena incorrectos";
    }



?>
//////////////////////PHPUNIT el estandar para pruebas unitarias php///////////////////////////////////

<?php
use PHPUNit\FRamework\TestCase;

//La clase con la logica a probar
class Calculadora{
    public functionn sumar(int $a,int $b): int{
        return $a+$b;
    }
}
//La clase de prueba que verifica la calculadora 
class CAlculadoraTest extends TestCase{
    public functions testSymadePositivos(){
        //Preparamos creadno el objeto a pronbar
        $calculadora=new Calculadora();

        //Actuamos ejecutando el metodo a verificar
        $resultado = $calculadora->sumar(5,10);

        //Assert afirmamos comprobamos el reultado esperado
        $this->assertSame(15,$resultado,"La sumad e 5+10 deberia ser 15")
    
    }

}
////////////////////////Smarty Template///////////////////////////////
<h1> HOla,{$nombreUsuario}!</h1>
{if $logueado}
    <p>Tu rol es {$rol}</p>
{/if}
*/
?>