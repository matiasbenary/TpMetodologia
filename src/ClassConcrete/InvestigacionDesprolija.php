<?php
/**
 * Created by PhpStorm.
 * User: matias
 * Date: 02/07/19
 * Time: 23:51
 */

namespace Patrones\ClassConcrete;


use Patrones\ClassAbstract\DetectiveTemplate;

class InvestigacionDesprolija extends DetectiveTemplate
{

    protected function recorreLugar()
    {
        print_r("Camina sobre las pistas \n");
    }

    protected function revisarVictima()
    {
        print_r("Palpar victimas \n");
    }

    protected function entrevistarTestigos()
    {
        print_r("Preguntar como estuvo su dia \n");
    }

    protected function formularHipotesis()
    {
        print_r("Escribir lo primero que me viene a la cabeza \n");
    }

    protected function realizarAcusacion()
    {
        print_r("Tirar la moneda para elegir el acusado \n");
    }
}