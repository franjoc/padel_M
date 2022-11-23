<?php

namespace App\Servicios;
include __DIR__."/../../autoload.php";


use App\Personas\Pareja;
use App\Servicios\Pista;
use App\Horarios\Intervalo;

class Partida
{
    private Pareja $pareja1;
    private Pareja $pareja2;
    private Pista $pista;
    private Intervalo $intervaloHorario;

    /**
     * @param $pareja1
     * @param $pareja2
     */
    public function __construct(Pareja $pareja1, Pareja $pareja2)
    {
        $this->pareja1 = $pareja1;
        $this->pareja2 = $pareja2;
    }

    /**
     * @return mixed
     */
    public function getPareja1():Pareja
    {
        return $this->pareja1;
    }

    /**
     * @param mixed $pareja1
     * @return Partida
     */
    public function setPareja1(Pareja $pareja1):Partida
    {
        $this->pareja1 = $pareja1;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPareja2():Pareja
    {
        return $this->pareja2;
    }

    /**
     * @param mixed $pareja2
     * @return Partida
     */
    public function setPareja2(Pareja $pareja2):Partida
    {
        $this->pareja2 = $pareja2;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPista():Pista
    {
        return $this->pista;
    }

    /**
     * @return mixed
     */
    public function getIntervaloHorario():Intervalo
    {
        return $this->intervaloHorario;
    }

    public function generarPartida():?Partida{
        //TODO generar funcionalidad para buscar la pista y el horario que más convenga
        return $this;
    }

}