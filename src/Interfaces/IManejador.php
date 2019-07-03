<?php
/**
 * Created by PhpStorm.
 * User: matias
 * Date: 02/07/19
 * Time: 19:08
 */

namespace Patrones\Interfaces;

interface IManejador
{
    public function siguiente(IManejador $manejador);


    public function manejador($peticion,$presentes = []);

}