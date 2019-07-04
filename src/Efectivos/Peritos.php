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

    public function accidentes($presentes= [])
    {
        if(!array_key_exists("perito",$presentes)){
            $presentes["perito"] = 1;
        }else{
            $presentes["perito"] ++;
        }

        print_r("Perito " . $this->nombre . " disponible para el accidente \n");
        return parent::accidentes($presentes);
    }

    public function robos()
    {
        print_r("Perito " . $this->nombre . " disponible para el robo \n");
        print_r("Robos bajo control \n");

    }
}