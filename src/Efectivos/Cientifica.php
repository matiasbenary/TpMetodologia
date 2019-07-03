<?php
/**
 * Created by PhpStorm.
 * User: matias
 * Date: 02/07/19
 * Time: 20:02
 */

namespace Patrones\Efectivos;


use Patrones\Interfaces\IEfectivoDeGot;

class Cientifica extends ManejadorEfectivos implements IEfectivoDeGot
{
    public function manejador($peticion,$presentes = [])
    {
        if(!array_key_exists("cientifica",$presentes)){
            $presentes["cientifica"] = 0;
        }

        if(!array_key_exists("perito",$presentes)){
            $presentes["perito"] = 0;
        }

        if (($peticion === 'accidentes' && $presentes["perito"] == 0 && $presentes["cientifica"] == 0) ) {
            $presentes["cientifica"] +=1;
            print_r("Policia Cientifica " . $this->nombre . " atiendo " . $peticion . ".\n");
        }

        if($peticion === "amenazas de bomba")
        {
            $presentes["orden"] [] = "cientifica";
            print_r("Policia Cientifica " . $this->nombre . " atiendo " . $peticion . ".\n");
        }

        $aux = $presentes;

        return parent::manejador($peticion,$aux);
    }
}