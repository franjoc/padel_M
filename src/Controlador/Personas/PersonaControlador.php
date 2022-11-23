<?php

namespace Controlador\Personas;

use Modelo\Excepciones\PersonaNoEncontradaException;
use Modelo\Personas\PersonaDAO;
use Modelo\Personas\PersonaDAOMySQL;
use App\Personas\Persona;



class PersonaControlador
{
    private personaDAO $modelo;
    private personaVista $vista;

    /**
     * @param personaDAO $modelo
     * @param personaVista $vista
     */
    public function __construct()
    {
        $this->modelo = new personaDAOMySQL();
        //$this->vista = new personaVista();
    }
    public function comprobarUsuarioWeb($correoUsuario, $pass){
        $persona=$this->modelo->leerPersonaPorCorreoElectronico($correoUsuario);
        if(password_verify($pass,$persona->getContrasenya())){
            echo "yupiiiii";
        }else{
            echo "contraseña incorrecta";
        }

    }

    public function crear(){

        $passCifrado = password_hash("1234",PASSWORD_DEFAULT);
        $persona = new Persona('44111555H','Javier','Azpeleta',
            'javieraz@gmail.com',$passCifrado,"987653421");
        $this->modelo->insertarPersona($persona);
    }

    public function login(){
        echo "Esta es la página de login";
    }

    public function mostrar($dni){
        if(isset($dni)){
            try{
                $this->mostrarDatosPersonaAPI($dni);
            }catch(PersonaNoEncontradaException $e){
                //TODO implementar respuesta http
                echo "No existe la persona buscada ". $e->getMessage();
            }
        }else{
            $this->mostrarTodasLasPersonasAPI();
        }

    }
    private function mostrarTodasLasPersonasAPI(){
        echo json_encode($this->modelo->leerTodasLasPersonas(),JSON_PRETTY_PRINT);
    }
    private function mostrarDatosPersonaAPI($dni){
        echo json_encode($this->modelo->leerPersona($dni),JSON_PRETTY_PRINT);
    }

    public function guardar(){

        $respuestaControlPersona = $this->comprobarDatosPersonaCorrectos("post");

        if (is_bool($respuestaControlPersona)){
            $persona= new Persona($_POST['dni'],$_POST['nombre'],
                $_POST['apellidos'],$_POST['correoelectronico'],$_POST['contrasenya']);
            if (isset($_POST['telefono'])){
                $persona->setTelefono($_POST['telefono']);
            }
            $this->modelo->insertarPersona($persona);
        }else{
            $mensajeError = "Se han producido errores en los siguientes campos<br>";
            foreach ($respuestaControlPersona as $error){
                $mensajeError .= "Error en el parámetro $error <br>";
            }
            throw new ParametrosDePersonaIncorrectosException($mensajeError);
        }

    }

    private function comprobarDatosPersonaCorrectos($metodo):array|bool{
        $arrayFallos = array();
        if($metodo=='post'){
            if (!isset($_POST['dni'])){
                $arrayFallos[]='dni';
            }
            if (!isset($_POST['nombre'])){
                $arrayFallos[]='nombre';
            }
            if (!isset($_POST['apellidos'])){
                $arrayFallos[]='apellidos';
            }
            if (!isset($_POST['correoelectronico'])){
                $arrayFallos[]='correoelectronico';
            }
            if (!isset($_POST['contrasenya'])){
                $arrayFallos[]='contrasenya';
            }
        }
        if (count($arrayFallos)>0){
            return  $arrayFallos;
        }else{
            return true;
        }
    }

    public function borrar($dni){
        if(isset($dni)){
            try{
                $this->modelo->borrarPersonaPorDNI($dni);
            }catch(PersonaNoEncontradaException $e){
                header("Persona no encontrada",true,500);
            }

        }else{
           $this->modelo->borrarTodasLasPersonas();
        }

    }

    public function modificar($dni){
        parse_str(file_get_contents("php://input"),$put_vars);
        if(isset($dni)){
            try{
                $persona= $this->modelo->leerPersona($dni);
            }catch (PersonaNoEncontradaException $e){
                header("Persona no encontrada",true,404);
                die;
            }
            if (isset($put_vars['dni'])){
                if ($this->modelo->existeDNI($put_vars['dni'])){
                    header("DNI existente",true,204);
                    die;
                }else{
                    $persona->setDNI($put_vars['dni']);
                }
            }
            if (isset($put_vars['nombre'])){
                $persona->setNombre($put_vars['nombre']);
            }
            if (isset($put_vars['apellidos'])){
                $persona->setApellidos($put_vars['apellidos']);
            }
            if (isset($put_vars['telefono'])){
                $persona->setTelefono($put_vars['telefono']);
            }
            if (isset($put_vars['contrasenya'])){
                $persona->setContrasenya($put_vars['contrasenya']);
            }
            if (isset($put_vars['correoelectronico'])){
                if ($this->modelo->existeCorreoElectronico($put_vars['correoelectronico'])){
                    header("Correo electronico existente",true,204);
                    die;
                }else{
                    $persona->setCorreoElectronico($put_vars['correoelectronico']);
                }
            }
            $this->modelo->modificarPersona($persona);

        }else{

        }

    }




}