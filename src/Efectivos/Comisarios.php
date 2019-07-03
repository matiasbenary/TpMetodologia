<?php
/**
 * Created by PhpStorm.
 * User: matias
 * Date: 02/07/19
 * Time: 19:52
 */

namespace Patrones\Efectivos;


use Patrones\Interfaces\IEfectivoDeGot;

class Comisarios extends ManejadorEfectivos  implements IEfectivoDeGot
{
    public function manejador($peticion,$presentes = [])
    {
        if(!array_key_exists("comisario",$presentes)){
            $presentes["comisario"] = 0;
        }


        if ($peticion === "robos" || ($peticion === 'secuestros' && $presentes["comisario"] == 0)) {
            $presentes["comisario"] +=1;
            print_r("Comisario " . $this->nombre . " atiendo " . $peticion . ".\n");
        }

        if($peticion === "amenazas de bomba")
        {
            $presentes["orden"] [] = "comisario";
            print_r("Comisario " . $this->nombre . " atiendo " . $peticion . ".\n");
        }

        return parent::manejador($peticion,$presentes);

    }

}