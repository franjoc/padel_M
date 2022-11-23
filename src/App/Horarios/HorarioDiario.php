<?php

namespace App\Horarios;

use App\Horarios\Excepciones\HoraNoValidaException;

include __DIR__ . "/../../autoload.php";


class HorarioDiario
{
    private \DateTime $fecha;
    private float $horaApertura;
    private float $horaCierre;
    private int $duracionIntervalos;
    private array $intervalosDelDia;

    /**
     * @param $fecha
     * @param $horaApertura
     * @param $horaCierre
     * @param $duracionIntervalos
     */
    public function __construct(\DateTime $fecha, float $horaApertura, float $horaCierre, int $duracionIntervalos)
    {
        $this->fecha = $fecha;
        if($horaApertura<0 || $horaApertura>23){
            throw new HoraNoValidaException("Hora de Apertura no valida");
        }
        if ($horaCierre<0 || $horaCierre>23){
            throw new HoraNoValidaException("Hora de Cierre no valida");
        }
        if($horaApertura>=$horaCierre){
            throw new HoraNoValidaException("Hora de Apertura Mayor que la de cierre");
        }
        if(Intervalo::calcularFinIntervalo($horaApertura,$duracionIntervalos)>$horaCierre){
            throw new HoraNoValidaException("Imposible crear un solo intervalo");
        }
        if($horaApertura-intval($horaApertura)>0.59){
            throw new HoraNoValidaException("Parte fraccionaria de la hora de apertura no valida");
        }
        if($horaCierre-intval($horaCierre)>0.59){
            throw new HoraNoValidaException("Parte fraccionaria de la hora de apertura no valida");
        }

        $this->horaApertura = $horaApertura;
        $this->horaCierre = $horaCierre;
        $this->duracionIntervalos = $duracionIntervalos;
    }

    /**
     * @return mixed
     */
    public function getFecha(): \DateTime
    {
        return $this->fecha;
    }

    /**
     * @param mixed $fecha
     * @return HorarioDiario
     */
    public function setFecha(\DateTime $fecha): HorarioDiario
    {
        $this->fecha = $fecha;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHoraApertura(): float
    {
        return $this->horaApertura;
    }

    /**
     * @param mixed $horaApertura
     * @return HorarioDiario
     */
    public function setHoraApertura(float $horaApertura): HorarioDiario
    {
        $this->horaApertura = $horaApertura;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHoraCierre(): float
    {
        return $this->horaCierre;
    }

    /**
     * @param mixed $horaCierre
     * @return HorarioDiario
     */
    public function setHoraCierre(float $horaCierre): HorarioDiario
    {
        $this->horaCierre = $horaCierre;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDuracionIntervalos(): int
    {
        return $this->duracionIntervalos;
    }

    /**
     * @param mixed $duracionIntervalos
     * @return HorarioDiario
     */
    public function setDuracionIntervalos(int $duracionIntervalos): HorarioDiario
    {
        $this->duracionIntervalos = $duracionIntervalos;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIntervalosDelDia(): array
    {
        return $this->intervalosDelDia;
    }

    /**
     * @param mixed $intervalosDelDia
     * @return HorarioDiario
     */
    public function setIntervalosDelDia(array $intervalosDelDia)
    {
        $this->intervalosDelDia = $intervalosDelDia;
        return $this;
    }

    public function generarIntervalos(): ?HorarioDiario
    {
        //TODO Función para crear el array de intervalos del día
        return $this;
    }

    public function imprimirHorarioDiario(): string
    {
        //TODO Función que recorra el array de Horarios y lo imprima
        return "Función por implementar";
    }


}