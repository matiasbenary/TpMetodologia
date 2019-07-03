<?php
/**
 * Created by PhpStorm.
 * User: matias
 * Date: 02/07/19
 * Time: 17:19
 */

namespace Patrones;


use Patrones\Efectivos\Fabrica;
use Patrones\Efectivos\FabricaDeEfectivos;
use Patrones\Interfaces\IEfectivoDeGot;
use function print_r;

class NueveOnce
{
//    private static $instance;
//
//    private function __construct()
//    {
//        // Private to disabled instantiation.
//    }

    protected $eg;
    private static function crearDepartamentoDePolicia()
    {

        $estacion = new Fabrica();
        $eg = null;


			// Con esta cadena, todos los casos deberán ser atendidos
			$eg = $estacion->crear("Operador", "Tyrion Lannister", $eg);
			$eg = $estacion->crear("Cientifica", "Daenerys Targaryen", $eg);
			$eg = $estacion->crear("Oficial", "Arya Stark", $eg);
			$eg = $estacion->crear("Oficial", "Jon Snow", $eg);
			$eg = $estacion->crear("DetectiveM", "Eddard Stark", $eg);
			$eg = $estacion->crear("FuezaEspecial", "Jaime Lannister", $eg);
			$eg = $estacion->crear("Oficial", "Cersei Lannister", $eg);
			$eg = $estacion->crear("Comisario", "Sansa Stark", $eg);
			$eg = $estacion->crear("Perito", "Robb Stark", $eg);
			$eg = $estacion->crear("Oficial", "Khal Drogo", $eg);
			$eg = $estacion->crear("DetectiveSY", "Sam Tarly", $eg);
			$eg = $estacion->crear("FuezaEspecial", "Varys", $eg);
			$eg = $estacion->crear("Oficial", "Bran Stark", $eg);
			$eg = $estacion->crear("DetectiveD", "Petyr Baelish", $eg);
			$eg = $estacion->crear("Oficial", "Tywin Lannister", $eg);


//			$eg = $estacion->crear("Cientifica", "Daenerys Targaryen", $eg);
//			$eg = $estacion->crear("Oficial", "Tywin Lannister", $eg);
//			$eg = $estacion->crear("Comisario", "Sansa Stark", $eg);
//        $eg = $estacion->crear("FuezaEspecial", "Jaime Lannister", $eg);

			return $eg;
    }

    private static function generarDenuncias(IEfectivoDeGot $eg)
    {
        $denuncias = [
//            "accidentes",
//            "accidentes",
//            "accidentes",
//            "robos",
//            "amenazas de bomba",
            "secuestros",
//            "asesinatos",
//            "asesinatos",
//            "asesinatos",
//            "disturbios"
        ];
        foreach ($denuncias as $denuncia){
            print_r($denuncia."\n");
            $eg->manejador($denuncia);
        }
    }


    public static function main()
    {
        $eg = self::crearDepartamentoDePolicia();

        self::generarDenuncias($eg);

        print_r("Terminada la llamada\n");
    }
}