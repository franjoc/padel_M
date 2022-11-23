<?php


//    use \App\Persona;

    namespace App;

    use App\Personas\Persona;
    use Controlador\Personas\PersonaControlador;
    use Modelo\Personas\PersonaDAOMySQL;
    use Vistas\Personas\PersonaVista;
    use Vistas\Plantillas\Plantilla;

    include __DIR__."/autoload.php";

//    echo "<pre>";
//    var_dump($_SERVER);
//    echo "<pre>";

    $router = new Router();
    $router->guardarRuta('get','/',function(){
        echo "Estoy en el index";
    });
    $router->guardarRuta('get','/personas',[PersonaControlador::class,"mostrar"]);
    $router->guardarRuta('post','/personas',[PersonaControlador::class,"guardar"]);
    $router->guardarRuta('delete','/personas',[PersonaControlador::class,"borrar"]);
    $router->guardarRuta('put','/personas',[PersonaControlador::class,"modificar"]);




    $router->resolverRuta($_SERVER['REQUEST_URI'],$_SERVER['REQUEST_METHOD']);

