<?php
/**
 * Created by PhpStorm.
 * User: matias
 * Date: 02/07/19
 * Time: 20:06
 */

namespace Patrones\Efectivos;


use Patrones\Interfaces\IEfectivoDeGot;
use function print_r;

class Oficiales extends ManejadorEfectivos implements IEfectivoDeGot
{
    public function manejador($peticion,$presentes = [])
    {
        if(!array_key_exists("oficial",$presentes)){
            $presentes["oficial"] = 0;
        }

        if(!array_key_exists("fuerzaEspecial",$presentes)){
            $presentes["fuerzaEspecial"] = 0;
        }

        if ((($presentes["oficial"] < 11 && $peticion === "disturbios")||($presentes["oficial"] < 3 && $peticion === "accidentes") || ($presentes["fuerzaEspecial"] < 2 && $peticion === "secuestros")) && $peticion != "asesinatos" && $peticion != "amenazas de bomba"){
            $presentes["oficial"] +=1;
            print_r("Oficial " . $this->nombre . " atiendo " . $peticion . ".\n");
        }

        if($peticion === "amenazas de bomba")
        {
            $presentes["orden"] [] = "oficial";
            print_r("Oficial " . $this->nombre . " atiendo " . $peticion . ".\n");
        }

        return parent::manejador($peticion,$presentes);

    }
}