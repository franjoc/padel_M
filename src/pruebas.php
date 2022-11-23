<?php


//    include_once("App/Personas/Persona.php");
//    include_once("App/Personas/Jugador.php");
//    include_once("App/Personas/Enums/ManoHabil.php");
//    include_once("App/Personas/Enums/LadoPreferido.php");
//    include_once("App/Horarios/Intervalo.php");

/*$persona = new Persona('12345678A','Javier','Gonzalez');

//    var_dump($persona);
echo "<br>";
echo "<br>";

$jugador = new Jugador("87654321A",
    "Rocio",
    "Carratala",
    1,
    ManoHabil::Izquierda,
    LadoPreferido::Izquierdo);

//    var_dump($jugador);

$intervalo1 = new Intervalo(8.00,9.00);
$intervalo2 = new Intervalo(9.00,10.00);
$intervalo3 = new Intervalo(10.00,11.00);

var_dump($intervalo1);

echo "<br>";

var_dump($intervalo2);

echo "<br>";

var_dump($intervalo3);

echo "<br>";

$array = [$intervalo1,$intervalo2,$intervalo2];

print_r($array);

foreach ($array as $intervalo){

    echo "El intervalo comienza a las ".
        $intervalo->getHoraInicio()." y termina a las ".$intervalo->getHoraFin()."<br>";


}

echo "<br> Resultado de la búsqueda: ". array_search($intervalo2,$array);*/

/*    $personaDAO = new PersonaDAOMySQL();

    $personaDAO->borrarTodasLasPersonas();

    $personaAModificar = new Persona('44111333B','Javier','Azpeleta',
    'javieraz@gmail.com','1234',"987653421");
    $resultado = $personaDAO->insertarPersona($personaAModificar);

    $personaAModificar = new Persona('44111444D','Javier','Azpeleta',
        'javieraz@gmail.com','1234');

    //$personaDAO->insertarPersona($personaAModificar);

    $resultado = $personaDAO->insertarPersona($personaAModificar);

    //$resultado=$personaDAO->obtenerRangoPersonas(0,50);

    $resultado = $personaDAO->obtenerPersonasPorNombre("Javier");

    var_dump($resultado);

    $resultado = $personaDAO->obtenerPersonasPorApellidos("Azpeleta");

    var_dump($resultado);

    $resultado = $personaDAO->obtenerPersonasSinTelefono();

    var_dump($resultado);*/

//    $vista = new PersonaVista("Home");
//
//    $vista->getHtml()->generarBarraNavegacion(['Home'=>'./index.php',
//        'Log In'=>'./login.php']);
//
//    echo $vista;

use Controlador\Personas\PersonaControlador;
use Vistas\Plantillas\Plantilla;

$plantilla = new Plantilla("Prueba");
echo $plantilla->getEncabezado();
echo $plantilla->getNav();

$controlador = new PersonaControlador();
//$controlador->crear();
//$controlador->comprobarUsuarioWeb("javieraz@gmail.com","1234");