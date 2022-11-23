<?php

namespace App\Horarios;
include __DIR__."/../../autoload.php";


use App\Personas\Jugador;

class Intervalo
{
    private float $horaInicio;
    private float $horaFin;
    private bool $disponibilidad;
    private Jugador $socioReservado;

    /**
     * @param $horaInicio
     * @param $horaFin
     */
    public function __construct(float $horaInicio, float $horaFin)
    {
        $this->horaInicio = $horaInicio;
        $this->horaFin = $horaFin;
        //Considero que cuando creo el intervalo, este estará disponible
        $this->disponibilidad=true;
    }

    /**
     * @return mixed
     */
    public function getHoraInicio():float
    {
        return $this->horaInicio;
    }

    /**
     * @param mixed $horaInicio
     * @return Intervalo
     */
    public function setHoraInicio(float $horaInicio):Intervalo
    {
        $this->horaInicio = $horaInicio;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHoraFin():float
    {
        return $this->horaFin;
    }

    /**
     * @param mixed $horaFin
     * @return Intervalo
     */
    public function setHoraFin(float $horaFin):Intervalo
    {
        $this->horaFin = $horaFin;
        return $this;
    }

    /**
     * @return bool
     */
    public function isDisponible(): bool
    {
        return $this->disponibilidad;
    }

    /**
     * @param bool $disponibilidad
     * @return Intervalo
     */
    public function setDisponible(bool $disponibilidad): Intervalo
    {
        $this->disponibilidad = $disponibilidad;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSocioReservado():Jugador
    {
        return $this->socioReservado;
    }

    public function reservarHorario(Jugador $jugador):Intervalo
    {
        $this->socioReservado=$jugador;
        return $this;
    }

    public static function calcularFinIntervalo(float $horaIncioIntervalo, int $duracionIntervalo):float
    {
        return 0.0;
    }

    public function __toString():string{

        return "salida";
    }
}