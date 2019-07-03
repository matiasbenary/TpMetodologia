<?php
/**
 * Created by PhpStorm.
 * User: matias
 * Date: 02/07/19
 * Time: 20:01
 */

namespace Patrones\Efectivos;


use Patrones\Interfaces\IEfectivoDeGot;

class Peritos extends ManejadorEfectivos implements IEfectivoDeGot
{
    public function manejador($peticion,$presentes = [])
    {
        if(!array_key_exists("perito",$presentes)){
            $presentes["perito"] = 0;
        }

        if(!array_key_exists("cientifica",$presentes)){
            $presentes["cientifica"] = 0;
        }

        if ($peticion === "robos" ) {
            $presentes["perito"] +=1;
            print_r ( "Perito ".$this->nombre." atiendo " . $peticion . ".\n");
        }


        elseif ($peticion === 'accidentes' && $presentes["perito"] == 0 && $presentes["cientifica"] == 0)
        {
            $presentes["perito"] +=1;
            print_r ( "Perito ".$this->nombre." atiendo " . $peticion . ".\n");
            return parent::manejador($peticion,$presentes);

        }else{
            return parent::manejador($peticion,$presentes);
        }

    }

}