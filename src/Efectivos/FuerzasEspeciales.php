<?php
/**
 * Created by PhpStorm.
 * User: matias
 * Date: 02/07/19
 * Time: 20:04
 */

namespace Patrones\Efectivos;


use Patrones\Interfaces\IEfectivoDeGot;

class FuerzasEspeciales extends ManejadorEfectivos  implements IEfectivoDeGot
{
    public function manejador($peticion,$presentes = [])
    {
        if(!array_key_exists("fuerzaEspecial",$presentes)){
            $presentes["fuerzaEspecial"] = 0;
        }

        if ($presentes["fuerzaEspecial"] < 2 && $peticion === "secuestros")
        {
            $presentes["fuerzaEspecial"] +=1;
            print_r("Fuerzas Especiales " . $this->nombre . " atiendo " . $peticion . ".\n");
        }

        if($peticion === "amenazas de bomba")
        {
            $presentes["orden"] [] = "fuerzaEspecial";
            print_r("Fuerzas Especiales " . $this->nombre . " atiendo " . $peticion . ".\n");
        }

        return parent::manejador($peticion,$presentes);
    }

    public function amenazasDeBomba($orden = [])
    {
        $orden[] = "fuerzaEspecial";
        print_r("Fuerzas Especiales " . $this->nombre . " disponible para la amenaza de bomba \n");
        return parent::amenazasDeBomba($orden); // TODO: Change the autogenerated stub
    }

    public function secuestros($presentes = [])
    {
        if(!array_key_exists("fuerzaEspecial",$presentes)){
            $presentes["fuerzaEspecial"] = 1;
        }else{
            $presentes["fuerzaEspecial"] ++;
        }

        if(array_key_exists("fuerzaEspecial",$presentes) && ($presentes["fuerzaEspecial"] <= 2) ){
            print_r("Fuerza Especiales " . $this->nombre . " disponible para el secuestro \n");
        }
        return parent::secuestros($presentes); // TODO: Change the autogenerated stub
    }
}