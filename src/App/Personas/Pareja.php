<?php

namespace App\Personas;
include __DIR__."/../../autoload.php";

use App\Personas\Jugador;

class Pareja
{
    private Jugador $jugador1;
    private Jugador $jugador2;

    /**
     * @param Jugador $jugador1
     * @param Jugador $jugador2
     */
    public function __construct(Jugador $jugador1, Jugador $jugador2)
    {
        $this->jugador1 = $jugador1;
        $this->jugador2 = $jugador2;
    }

    /**
     * @return mixed
     */
    public function getJugador1():Jugador
    {
        return $this->jugador1;
    }

    /**
     * @param mixed $jugador1
     * @return Pareja
     */
    public function setJugador1(Jugador $jugador1):Pareja
    {
        $this->jugador1 = $jugador1;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getJugador2():Jugador
    {
        return $this->jugador2;
    }

    /**
     * @param mixed $jugador2
     * @return Pareja
     */
    public function setJugador2(Jugador $jugador2):Pareja
    {
        $this->jugador2 = $jugador2;
        return $this;
    }

    public function generarPareja():Pareja
    {
        /*
         * TODO implementar funcionalidad para crear pareja
         * basado en el lado en el que juegan si aceptan partidas mixtas
         * la mano preferida y los Horarios que tienen disponibles
         */
        return $this;
    }



}