<?php
/**
 * Created by PhpStorm.
 * User: matias
 * Date: 02/07/19
 * Time: 17:45
 */

namespace Patrones\Efectivos;


use Patrones\ClassConcrete\InvestigacionMinuciosa;
use Patrones\Interfaces\IEfectivoDeGot;

class FabricaDeDetectiveM extends FabricaDeEfectivos
{

    protected function crearFabrica($nombre,$siguiete)
    {
        $metodo = InvestigacionMinuciosa::getInstance();
        return new ProxyDetective(new Detectives($metodo),$nombre,$siguiete);

    }
}