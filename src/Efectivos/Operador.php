<?php
/**
 * Created by PhpStorm.
 * User: matias
 * Date: 04/07/19
 * Time: 17:22
 */

namespace Patrones\Efectivos;


class Operador extends ManejadorEfectivos
{
    public function accidentes($presentes = [])
    {
        $this->informar();
    }

    public function robos()
    {
        $this->informar();
    }

    public function amenazasDeBomba($orden = [])
    {
        $this->informar();
    }

    public function secuestros($presentes = [])
    {
        $this->informar();
    }

    public function asesinatos()
    {
        $this->informar();
    }

    public function disturbios($cant = 0)
    {
        $this->informar();
    }

    protected function informar()
    {
        print_r("\n---------------------------------------------------------\nNo hay efectivos disponibles para atender la denuncia y que se intente más tarde.\n-------------------------------------------------------------\n");
    }
}