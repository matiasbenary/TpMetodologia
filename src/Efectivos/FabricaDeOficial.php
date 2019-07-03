<?php
/**
 * Created by PhpStorm.
 * User: matias
 * Date: 02/07/19
 * Time: 18:09
 */

namespace Patrones\Efectivos;

use Patrones\Interfaces\IEfectivoDeGot;

class FabricaDeOficial extends FabricaDeEfectivos
{

    protected function crearFabrica($nombre,$siguiete)
    {
        return new Oficiales($nombre,$siguiete);
    }
}