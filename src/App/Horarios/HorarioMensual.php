<?php

namespace App\Horarios;

include __DIR__."/../../autoload.php";


class HorarioMensual
{
    private int $mes;
    private int $anyo;
    private array $horariosDiarios;

    /**
     * @param $mes
     * @param $anyo
     * @param $horariosDiarios
     */
    public function __construct(int $mes, int $anyo)
    {
        $this->mes = $mes;
        $this->anyo = $anyo;
    }

    /**
     * @return mixed
     */
    public function getMes():int
    {
        return $this->mes;
    }

    /**
     * @param mixed $mes
     * @return HorarioMensual
     */
    public function setMes(int $mes):HorarioMensual
    {
        $this->mes = $mes;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAnyo():int
    {
        return $this->anyo;
    }

    /**
     * @param mixed $anyo
     * @return HorarioMensual
     */
    public function setAnyo(int $anyo)
    {
        $this->anyo = $anyo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHorariosDiarios():array
    {
        return $this->horariosDiarios;
    }

    public function generarHorarios(): ?HorarioMensual{
        //TODO implementación de la funcionalidad de generar Horarios
        return $this;
    }

    public function calcularNumHoras():int{
        //TODO implementar calcular horas para calcular salario empleado
        return 0;
    }


}