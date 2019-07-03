<?php
/**
 * Created by PhpStorm.
 * User: matias
 * Date: 02/07/19
 * Time: 17:38
 */

namespace Patrones\Efectivos;


use Patrones\Interfaces\IEfectivoDeGot;

abstract class FabricaDeEfectivos
{

    public function crear($options,$nombre,$siguiete)
    {
        $fabrica= null;
        switch($options){
            case "Operador": $fabrica = new FabricaDeOperador(); break;
            case "Cientifica": $fabrica = new FabricaDeCientifica(); break;
            case "Oficial": $fabrica = new FabricaDeOficial(); break;
            case "FuezaEspecial": $fabrica = new FabricaDeFuerzaEspecial(); break;
            case "Comisario": $fabrica = new FabricaDeComisario(); break;
            case "Perito": $fabrica = new FabricaDePerito(); break;
            case "DetectiveSY": $fabrica = new FabricaDeDetectiveSY(); break;
            case "DetectiveM": $fabrica = new FabricaDeDetectiveM(); break;
            case "DetectiveD": $fabrica = new FabricaDeDetectiveD(); break;
        }
        return $fabrica->crearFabrica($nombre, $siguiete);
    }

    abstract protected function crearFabrica($nombre,$siguiete);

}