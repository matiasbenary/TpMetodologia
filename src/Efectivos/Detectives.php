<?php
/**
 * Created by PhpStorm.
 * User: matias
 * Date: 02/07/19
 * Time: 19:16
 */

namespace Patrones\Efectivos;

use Patrones\ClassAbstract\DetectiveTemplate;
use Patrones\Interfaces\IDetective;
use Patrones\Interfaces\IEfectivoDeGot;

class Detectives implements IEfectivoDeGot,IDetective
{
    private $metodologiaInvetigacion;
    /**
     * ManejadorAbstracto constructor.
     * @param $siguienteManejador
     */
    public function __construct(DetectiveTemplate $metodologiaInvetigacion)
    {
        $this->metodologiaInvetigacion = $metodologiaInvetigacion;
    }


    public function investigar()
    {
       $this->metodologiaInvetigacion->invetigar();
    }
}