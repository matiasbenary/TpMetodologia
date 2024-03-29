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
    public function accidentes($presentes= [])
    {
        if(!array_key_exists("oficial",$presentes)){
            $presentes["oficial"] = 1;
        }else{
            $presentes["oficial"] ++;
        }

        if(array_key_exists("oficial",$presentes) && ($presentes["oficial"] <= 3) ){
                   print_r("Oficial " . $this->nombre . " disponible para el accidente \n");
        }
       return parent::accidentes($presentes);
    }

    public function robos()
    {
        print_r("Oficial " . $this->nombre . " disponible para el robo \n");

        return parent::robos();
    }

    public function amenazasDeBomba($orden = [])
    {
        $orden[] = "oficial";
        print_r("Oficial " . $this->nombre . " disponible para la amenaza de bomba \n");
        return parent::amenazasDeBomba($orden); // TODO: Change the autogenerated stub
    }

    public function secuestros($presentes = [])
    {
        if(!array_key_exists("fuerzaEspecial",$presentes) ||(array_key_exists("fuerzaEspecial",$presentes) && ($presentes["fuerzaEspecial"] <= 2))) {
            print_r("Oficial " . $this->nombre . " disponible para el Secuestro \n");
        }
        return parent::secuestros($presentes); // TODO: Change the autogenerated stub
    }

    public function disturbios($cant = 0)
    {
        if($cant < 10){
            print_r("Oficial " . $this->nombre . " disponible para el Disturbio \n");
            $cant++;
            if($cant == 10){
                print_r("Disturbio bajo control \n");
            }else{
                return parent::disturbios($cant); // TODO: Change the autogenerated stub
            }
        }
    }
}