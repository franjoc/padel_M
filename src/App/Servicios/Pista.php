<?php

namespace App\Servicios;
include __DIR__."/../../autoload.php";


use App\Servicios\Enums\TipoPista;

class Pista
{
    private int $idPista;
    private float $precio;
    private bool $luz;
    private float $precioLuz;
    private TipoPista $tipoPista;
    private bool $cubierta;
    private bool $disponible;
    private array $reservaPistaMensual;

    /**
     * @param $idPista
     * @param $precio
     * @param $luz
     * @param $precioLuz
     * @param $tipoPista
     * @param $cubierta
     */
    public function __construct($idPista, $precio, $luz, $precioLuz, $tipoPista, $cubierta)
    {
        $this->idPista = $idPista;
        $this->precio = $precio;
        $this->luz = $luz;
        $this->precioLuz = $precioLuz;
        $this->tipoPista = $tipoPista;
        $this->cubierta = $cubierta;
        $this->disponible=true;
    }

    /**
     * @return mixed
     */
    public function getIdPista()
    {
        return $this->idPista;
    }

    /**
     * @param mixed $idPista
     * @return Pista
     */
    public function setIdPista($idPista)
    {
        $this->idPista = $idPista;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * @param mixed $precio
     * @return Pista
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLuz()
    {
        return $this->luz;
    }

    /**
     * @param mixed $luz
     * @return Pista
     */
    public function setLuz($luz)
    {
        $this->luz = $luz;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrecioLuz()
    {
        return $this->precioLuz;
    }

    /**
     * @param mixed $precioLuz
     * @return Pista
     */
    public function setPrecioLuz($precioLuz)
    {
        $this->precioLuz = $precioLuz;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTipoPista()
    {
        return $this->tipoPista;
    }

    /**
     * @param mixed $tipoPista
     * @return Pista
     */
    public function setTipoPista($tipoPista)
    {
        $this->tipoPista = $tipoPista;
        return $this;
    }

    /**
     * @return bool
     */
    public function isCubierta():bool
    {
        return $this->cubierta;
    }

    /**
     * @param mixed $cubierta
     * @return Pista
     */
    public function setCubierta($cubierta)
    {
        $this->cubierta = $cubierta;
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
     * @return Pista
     */
    public function setDisponible(bool $disponible): Pista
    {
        $this->disponible = $disponible;
        return $this;
    }

    public function generarHorarioMensual():Pista{
        //TODO implmentar generador de Horarios
        return $this;
    }



}