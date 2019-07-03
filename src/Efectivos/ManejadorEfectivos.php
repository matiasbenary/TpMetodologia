<?php
/**
 * Created by PhpStorm.
 * User: matias
 * Date: 02/07/19
 * Time: 18:59
 */

namespace Patrones\Efectivos;

use Patrones\Interfaces\IManejador;

class ManejadorEfectivos implements IManejador
{
    protected $siguienteManejador;
    protected $nombre;

    /**
     * ManejadorAbstracto constructor.
     * @param $siguienteManejador
     */
    public function __construct($nombre,$siguienteManejador)
    {
        $this->siguienteManejador = $siguienteManejador;
        $this->nombre = $nombre;
    }

    public function siguiente(IManejador $manejador)
    {
        $this->siguienteManejador = $manejador;
        return $manejador;
    }

    public function manejador($peticion,$presentes = [])
    {
        if($presentes == []){
            $presentes ["orden"]=[];
        }

        if ($this->siguienteManejador) {
            return $this->siguienteManejador->manejador($peticion,$presentes);
        }

        if(array_key_exists("orden",$presentes)){
            $this->checkOrden($presentes ["orden"]);
        }

        return null;
    }

    protected function checkOrden($orden){
        $amenazaDeBomba = [
            "fuerzaEspecial",
            "comisario",
            "oficial",
            "cientifica"
        ];
        $i=0;
        foreach ($orden as $lugar){

            if($i == 4){
                break;
            }

            if($amenazaDeBomba[$i] == $lugar){
                $i++;
            }
//            elseif(array_key_exists($i-1,$amenazaDeBomba) && $amenazaDeBomba[$i-1] == $lugar){
//
//            }
            else{
                $i=0;
            }
        }

        if($i == 4){
            print_r("amenzada de bomba cubierta\n");
        }else{
            print_r("no se pudo conseguir a los profecionales\n");
        }
    }

}