<?php

namespace App\Personas;
include __DIR__."/../../autoload.php";

use App\Personas\Jugador;

class Entrenador extends Empleado
{
    private int $nivelEntrenador;
    private int $numFederado;
    private Jugador $pupilo;

    /**
     * @param string $dni
     * @param string $nombre
     * @param string $apellidos
     * @param string $direccion
     * @param string $cuentaCorriente
     * @param string $numSeguridadSocial
     * @param int $nivelEntrenador
     * @param int $numFederado
     */
    public function __construct(string $dni,string $nombre,string $apellidos,
        string $correoElectronico, string $contrasenya,
        string $direccion, string $cuentaCorriente,
        string $numSeguridadSocial,int $nivelEntrenador, int $numFederado,
        string $telefono=null)
    {
        parent::__construct($dni,$nombre,$apellidos,$correoElectronico,$contrasenya,
            $direccion,$cuentaCorriente,$numSeguridadSocial,$telefono);
        $this->nivelEntrenador = $nivelEntrenador;
        $this->numFederado = $numFederado;
    }

    /**
     * @return mixed
     */
    public function getNivelEntrenador()
    {
        return $this->nivelEntrenador;
    }

    /**
     * @param mixed $nivelEntrenador
     * @return Entrenador
     */
    public function setNivelEntrenador(int $nivelEntrenador):Entrenador
    {
        $this->nivelEntrenador = $nivelEntrenador;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumFederado():int
    {
        return $this->numFederado;
    }

    /**
     * @param mixed $numFederado
     * @return Entrenador
     */
    public function setNumFederado(int $numFederado):Entrenador
    {
        $this->numFederado = $numFederado;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPupilo():Jugador
    {
        return $this->pupilo;
    }

    /**
     * @param mixed $pupilo
     * @return Entrenador
     */
    public function setPupilo(Jugador $pupilo):Entrenador
    {
        $this->pupilo = $pupilo;
        return $this;
    }





}