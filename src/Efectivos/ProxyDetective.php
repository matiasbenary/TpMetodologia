<?php
/**
 * Created by PhpStorm.
 * User: matias
 * Date: 02/07/19
 * Time: 23:31
 */

namespace Patrones\Efectivos;


use Patrones\Interfaces\IDetective;
use Patrones\Interfaces\IEfectivoDeGot;

class ProxyDetective extends ManejadorEfectivos  implements IEfectivoDeGot,IDetective
{
    private $detective;
    private $estaOcupado;
    /**
     * ProxyDetective constructor.
     */
    public function __construct(Detectives $detective,$nombre,$siguienteManejador)
    {
        $this->estaOcupado = 0;
        $this->detective = $detective;
        parent::__construct($nombre,$siguienteManejador);
    }

    public function investigar()
    {
        $this->detective->investigar();
    }

    public function manejador($peticion, $presentes = [])
    {
        if ($peticion === "asesinatos" && $this->estaOcupado == 0){
            $this->investigar();
            $this->estaOcupado = 1;
        }else{
            return parent::manejador($peticion,$presentes);
        }

    }

    public function asesinatos()
    {
        if ($this->estaOcupado == 0) {
            print_r("Detective " . $this->nombre . " disponible para el asesinato \n");
            $this->investigar();
            $this->estaOcupado = 1;
        }else{
            return parent::asesinatos();
        }
    }
}