<?php
/**
 * Created by PhpStorm.
 * User: matias
 * Date: 02/07/19
 * Time: 17:45
 */

namespace Patrones\Efectivos;


use Patrones\Interfaces\IEfectivoDeGot;

class FabricaDeFuerzaEspecial extends FabricaDeEfectivos
{

    protected function crearFabrica($nombre,$siguiete)
    {
        return new FuerzasEspeciales($nombre,$siguiete);
    }
}