<?php

namespace App\Personas;
include __DIR__."/../../autoload.php";

use App\Personas\Empleado;
use App\Personas\Jugador;

class Fisioterapeuta extends Empleado
{
    /**
     * @var int
     */
    private int $numColegiado;
    /**
     * @var \App\Personas\Jugador
     */
    private Jugador $clienteVIP;


    /**
     * @param string $dni
     * @param string $nombre
     * @param string $apellidos
     * @param string $correoElectronico
     * @param string $contrasenya
     * @param string $direccion
     * @param string $cuentaCorriente
     * @param string $numSeguridadSocial
     * @param int $numColegiado
     * @param string $telefono
     */
    public function __construct(string $dni,string $nombre,string $apellidos,
        string $correoElectronico, string $contrasenya,
        string $direccion, string$cuentaCorriente,string $numSeguridadSocial,
        int $numColegiado, string $telefono)
    {
        parent::__construct($dni,$nombre,$apellidos,$correoElectronico,$contrasenya,
            $direccion,$cuentaCorriente,$numSeguridadSocial,$telefono);
        $this->numColegiado = $numColegiado;
    }

    /**
     * @return int
     */
    public function getNumColegiado(): int
    {
        return $this->numColegiado;
    }

    /**
     * @param int $numColegiado
     * @return Fisioterapeuta
     */
    public function setNumColegiado(int $numColegiado): Fisioterapeuta
    {
        $this->numColegiado = $numColegiado;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getClienteVIP()
    {
        return $this->clienteVIP;
    }

    /**
     * @param mixed $clienteVIP
     * @return Fisioterapeuta
     */
    public function setClienteVIP($clienteVIP)
    {
        $this->clienteVIP = $clienteVIP;
        return $this;
    }



}