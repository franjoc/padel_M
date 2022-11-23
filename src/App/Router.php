<?php

namespace App;

use App\Exceptions\RutaNoEncontradaException;

class Router
{
    private array $rutas;

    public function guardarRuta(string $metodo, string $ruta, callable|array $accion):self{
        $this->rutas[$metodo][$ruta]=$accion;
        return $this;
    }

    public function resolverRuta($ruta,$metodo){


        $rutaFiltrada=parse_url($ruta,PHP_URL_PATH);
        $arrayRuta =explode('/',$rutaFiltrada);

        $parametros = null;
        if(count($arrayRuta)>2){
            $parametros = $arrayRuta[2];
            $rutaFiltrada='/'.$arrayRuta[1];
        }

        $metodo=strtolower($metodo);
        $accion = $this->rutas[$metodo][$rutaFiltrada] ?? null;

        if(!$accion){
            throw new RutaNoEncontradaException("Ruta no disponible");
        }else{
            if(is_callable($accion)){
                return call_user_func($accion);
            }
            if (is_array($accion)){
                [$clase,$metodo]=$accion;
                if(class_exists($clase)){
                    $clase = new $clase;
                    if (method_exists($clase,$metodo)){
                        return call_user_func_array([$clase,$metodo],[$parametros]);
                    }
                }
            }
            throw new RutaNoEncontradaException("Parámetro invalido");
        }


    }
}