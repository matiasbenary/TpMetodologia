<?php
/**
 * Created by PhpStorm.
 * User: matias
 * Date: 02/07/19
 * Time: 17:45
 */

namespace Patrones\Efectivos;


use Patrones\ClassConcrete\InvestigacionAdapter;

class FabricaDeDetectiveSY extends FabricaDeEfectivos
{

    protected function crearFabrica($nombre,$siguiete)
    {
        $metodo = InvestigacionAdapter::getInstance();
        return new ProxyDetective(new Detectives($metodo),$nombre,$siguiete);
    }
}