<?php

namespace Vistas\Personas;

use Vistas\Plantillas\Plantilla;

class PersonaVista
{
    private Plantilla $html;

    public function __construct(string $titulo)
    {
        $html=new Plantilla("Datos Personales");

    }

    public function imprimirDatosPersona(Persona $persona):string{

        $salida=$this->html->generarTodaLaPagina();
        return $salida;
    }

    /**
     * @return Plantilla
     */
    public function getHtml(): Plantilla
    {
        return $this->html;
    }

    /**
     * @param Plantilla $html
     * @return PersonaVista
     */
    public function setHtml(Plantilla $html): PersonaVista
    {
        $this->html = $html;
        return $this;
    }

    public function __toString():string{
        return $this->getHtml()->generarTodaLaPagina();

    }


}