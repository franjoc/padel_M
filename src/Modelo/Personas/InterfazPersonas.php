<?php

namespace Modelo\Personas;

use App\Personas\Persona;

interface InterfazPersonas
{
    public function insertarPersona(Persona $persona):?Persona;
    public function modificarPersona(Persona $persona):?Persona;
    public function borrarPersona(Persona $persona):?Persona;
    public function borrarPersonaPorDNI(string $dni):?Persona;
    public function leerPersona(string $dni):?Persona;
    public function leerPersonaPorCorreoElectronico(string $correoElectronico):?Persona;

    public function leerTodasLasPersonas():array;
    public function obtenerPersonasSinTelefono():?array;
    public function obtenerPersonasPorNombre(string $nombre):?array;
    public function obtenerPersonasPorApellidos(string $apellidos):?array;
    public function obtenerRangoPersonas(int $inicio, int $numeroResultados=NUMERODERESULTADOSPORPAGINA):array;

}