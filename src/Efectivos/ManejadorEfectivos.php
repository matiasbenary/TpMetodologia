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

    public function accidentes($presentes = [])
    {
       $oficiales = $this->checkArray($presentes,"oficial",3);
       $peritos = $this->checkArray($presentes,"perito",1);
       $cientifica = $this->checkArray($presentes,"cientifica",1);

       if($oficiales && ($peritos || $cientifica)){
           print_r("Accidente bajo control \n");
       }else{
           if ($this->siguienteManejador) {
               return $this->siguienteManejador->accidentes($presentes);
           }
       }


    }

    public function robos()
    {
        if ($this->siguienteManejador) {
            return $this->siguienteManejador->robos();
        }
    }

    public function amenazasDeBomba($orden = [])
    {
        if($this->checkOrden($orden)){
            print_r("Amenzasa de bomba control \n");
        }else{
            if ($this->siguienteManejador) {
                return $this->siguienteManejador->amenazasDeBomba($orden);
            }
        }
    }

    public function secuestros($presentes = [])
    {
        $fueza = $this->checkArray($presentes,"fuerzaEspecial",2);
        $comisario = $this->checkArray($presentes,"comisario",1);

        if($fueza && $comisario){
            print_r("Secuestro bajo control \n");
        }else{
            if ($this->siguienteManejador) {
                return $this->siguienteManejador->accidentes($presentes);
            }
        }
    }

    public function asesinatos($presentes = [])
    {
        if ($this->siguienteManejador) {
            return $this->siguienteManejador->asesinatos($presentes);
        }
    }


    protected function checkArray($array,$key,$cant,$compare = "==")
    {
//        print_r("\n");
//        print_r($key);
//        print_r($cant);
//        print_r($array);
//        $aux = array_key_exists($key,$array);
//        print_r(array_key_exists($key,$array));
//        if($aux){
//            print_r($array[$key] < $cant);
//            print_r($array[$key]);
//            return ($array[$key] >= $cant);
//        }
//        return false;
        return array_key_exists($key,$array) && ($array[$key] <= $cant);
//       $check = array_key_exists($key,$array);

//       $method =  [
//           "==" => "igual",
//           ">" => "mayor",
//           "<" => "menor"
//       ];
//       return $check && $this->$method[$compare]($array,$key,$cant);
//       return $check && $this->$method[$compare]($array,$key,$cant);
    }

//    protected function igual($array,$key,$cant){return $array[$key] == $cant;}
//    protected function mayor($array,$key,$cant){return $array[$key] > $cant;}
//    protected function menor($array,$key,$cant){return $array[$key] < $cant;}

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
        return $i==4;
//        if($i == 4){
//            print_r("amenzada de bomba cubierta\n");
//        }else{
//            print_r("no se pudo conseguir a los profecionales\n");
//        }
    }

}