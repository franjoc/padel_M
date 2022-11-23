<?php

namespace App\Personas;
include __DIR__."/../../autoload.php";

use App\Horarios\HorarioMensual;


class Empleado extends Persona
{
    private string $direccion;
    private string $cuentaCorriente;
    private string $numSeguridadSocial;
    private HorarioMensual $horario;
    private float $precioPorHora;
    private bool $disponible;
    private float $salario;

    /**
     * @param $direccion
     * @param $cuentaCorriente
     * @param $numSeguridadSocial
     */
    public function __construct(string $dni,string $nombre,string $apellidos,
        string $correoElectronico, string $contrasenya,string $direccion,
        string $cuentaCorriente,string $numSeguridadSocial, string $telefono=null)
    {
        parent::__construct($dni,$nombre,$apellidos,$correoElectronico,$contrasenya,$telefono);
        $this->direccion = $direccion;
        $this->cuentaCorriente = $cuentaCorriente;
        $this->numSeguridadSocial = $numSeguridadSocial;
        $this->disponible=true;
    }

    /**
     * @return string
     */
    public function getDireccion(): string
    {
        return $this->direccion;
    }

    /**
     * @param string $direccion
     * @return Empleado
     */
    public function setDireccion(string $direccion): Empleado
    {
        $this->direccion = $direccion;
        return $this;
    }

    /**
     * @return string
     */
    public function getCuentaCorriente(): string
    {
        return $this->cuentaCorriente;
    }

    /**
     * @param string $cuentaCorriente
     * @return Empleado
     */
    public function setCuentaCorriente(string $cuentaCorriente): Empleado
    {
        $this->cuentaCorriente = $cuentaCorriente;
        return $this;
    }

    /**
     * @return string
     */
    public function getNumSeguridadSocial(): string
    {
        return $this->numSeguridadSocial;
    }

    /**
     * @param string $numSeguridadSocial
     * @return Empleado
     */
    public function setNumSeguridadSocial(string $numSeguridadSocial): Empleado
    {
        $this->numSeguridadSocial = $numSeguridadSocial;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHorario():HorarioMensual
    {
        return $this->horario;
    }

    /**
     * @param mixed $horario
     * @return Empleado
     */
    public function setHorario(HorarioMensual $horario):Empleado
    {
        $this->horario = $horario;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrecioPorHora():float
    {
        return $this->precioPorHora;
    }

    /**
     * @param mixed $precioPorHora
     * @return Empleado
     */
    public function setPrecioPorHora(float $precioPorHora):Empleado
    {
        $this->precioPorHora = $precioPorHora;
        return $this;
    }

    /**
     * @return bool
     */
    public function isDisponible(): bool
    {
        return $this->disponible;
    }

    /**
     * @param bool $disponible
     * @return Empleado
     */
    public function setDisponible(bool $disponible): Empleado
    {
        $this->disponible = $disponible;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSalario()
    {
        return $this->salario;
    }
    public function calcularSalario():float{



        $this->salario=1*$this->precioPorHora;
        return $this->salario;
    }




}