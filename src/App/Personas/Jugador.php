<?php

namespace App\Personas;

use App\Personas\Entrenador;
use App\Horarios\HorarioMensual;
use App\Personas\Persona;
use App\Personas\Enums\LadoPreferido;
use App\Personas\Enums\ManoHabil;

include __DIR__."/../../autoload.php";

class Jugador extends Persona
{
    private int $nivelJuego;
    private ManoHabil $manoHabil;
    private LadoPreferido $ladoPreferido;
    private int $indiceDeIrresponsabilidad=0;
    private int $numFederado;
    private HorarioMensual $horarioMensualPreferido;
    private bool $renovacionAutomaticaHorario;
    private Fisioterapeuta $fisioAsociado;
    private Entrenador $entrenadorAsociado;
    private bool $partidasMixtas;
    private int $socio;
    private \DateTime $fechaAltaSocio;

    /**
     * @param string $dni
     * @param string $nombre
     * @param string $apellidos
     * @param int $nivelJuego
     * @param ManoHabil $manoHabil
     * @param LadoPreferido $ladoPreferido
     */
    public function __construct(string $dni,string $nombre,string $apellidos,
        string $correoElectronico, string $contrasenya,
        int $nivelJuego, ManoHabil $manoHabil,LadoPreferido $ladoPreferido,
        string $telefono=null)
    {
        parent::__construct($dni,$nombre,$apellidos,$correoElectronico,$contrasenya, $telefono);
        $this->nivelJuego = $nivelJuego;
        $this->manoHabil = $manoHabil;
        $this->ladoPreferido = $ladoPreferido;
    }

    /**
     * @return int
     */
    public function getNivelJuego(): int
    {
        return $this->nivelJuego;
    }

    /**
     * @param int $nivelJuego
     * @return Jugador
     */
    public function setNivelJuego(int $nivelJuego): Jugador
    {
        $this->nivelJuego = $nivelJuego;
        return $this;
    }

    /**
     * @return int
     */
    public function getManoHabil(): ManoHabil
    {
        return $this->manoHabil;
    }

    /**
     * @param ManoHabil $manoHabil
     * @return Jugador
     */
    public function setManoHabil(ManoHabil $manoHabil): Jugador
    {
        $this->manoHabil = $manoHabil;
        return $this;
    }

    /**
     * @return int
     */
    public function getLadoPreferido(): LadoPreferido
    {
        return $this->ladoPreferido;
    }

    /**
     * @param int $ladoPreferido
     * @return Jugador
     */
    public function setLadoPreferido(LadoPreferido $ladoPreferido): Jugador
    {
        $this->ladoPreferido = $ladoPreferido;
        return $this;
    }

    /**
     * @return int
     */
    public function getIndiceDeIrresponsabilidad(): int
    {
        return $this->indiceDeIrresponsabilidad;
    }

    /**
     * @param int $indiceDeIrresponsabilidad
     * @return Jugador
     */
    public function setIndiceDeIrresponsabilidad(int $indiceDeIrresponsabilidad): Jugador
    {
        $this->indiceDeIrresponsabilidad = $indiceDeIrresponsabilidad;
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
     * @return Jugador
     */
    public function setNumFederado(int $numFederado)
    {
        $this->numFederado = $numFederado;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRenovacionAutomaticaHorario():bool
    {
        return $this->renovacionAutomaticaHorario;
    }

    /**
     * @param mixed $renovacionAutomaticaHorario
     * @return Jugador
     */
    public function setRenovacionAutomaticaHorario($renovacionAutomaticaHorario):Jugador
    {
        $this->renovacionAutomaticaHorario = $renovacionAutomaticaHorario;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFisioAsociado():Fisioterapeuta
    {
        return $this->fisioAsociado;
    }

    /**
     * @param mixed $fisioAsociado
     * @return Jugador
     */
    public function setFisioAsociado(Fisioterapeuta $fisioAsociado)
    {
        $this->fisioAsociado = $fisioAsociado;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEntrenadorAsociado():Entrenador
    {
        return $this->entrenadorAsociado;
    }

    /**
     * @param mixed $entrenadorAsociado
     * @return Jugador
     */
    public function setEntrenadorAsociado(Entrenador $entrenadorAsociado)
    {
        $this->entrenadorAsociado = $entrenadorAsociado;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMixtas():bool
    {
        return $this->partidasMixtas;
    }

    /**
     * @param mixed $mixtas
     * @return Jugador
     */
    public function setMixtas(bool $mixtas)
    {
        $this->partidasMixtas = $mixtas;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSocio():int
    {
        return $this->socio;
    }


    public function altaSocio(){
        //TODO buscar el siguiente número de socio en la base de datos
        //PDO->query("Select id from jugador where dni=?")
        $this->fechaAltaSocio=new \DateTime();
    }


    /**
     * @return mixed
     */
    public function getHorarioMensualPreferido():HorarioMensual
    {
        return $this->horarioMensualPreferido;
    }

    /**
     * @return \DateTime
     */
    public function getFechaAltaSocio(): \DateTime
    {
        return $this->fechaAltaSocio;
    }

    /**
     * @param \DateTime $fechaAltaSocio
     * @return Jugador
     */
    public function setFechaAltaSocio(): Jugador
    {
        $this->fechaAltaSocio = new \DateTime();
        return $this;
    }


    public function generarHorarioPreferido(bool $renovacion):Jugador{

        //TODO implementar la generación de Horarios preferidos para el usuario
        return $this;
    }




}