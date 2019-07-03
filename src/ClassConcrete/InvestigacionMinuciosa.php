<?php
/**
 * Created by PhpStorm.
 * User: matias
 * Date: 02/07/19
 * Time: 23:51
 */

namespace Patrones\ClassConcrete;


use Patrones\ClassAbstract\DetectiveTemplate;

class InvestigacionMinuciosa extends DetectiveTemplate
{

    protected function recorreLugar()
    {
        print_r("Revisar todo los rincones\n");
    }

    protected function revisarVictima()
    {
        print_r("Revisar todas la pertenecias de la victima \n");
    }

    protected function entrevistarTestigos()
    {
        print_r("Preguntar sobre echos relevantes para el caso \n");
    }

    protected function formularHipotesis()
    {
        print_r("Cuestionar las entrevistas,y buscar anomalias con las pistas\n");
    }

    protected function realizarAcusacion()
    {
        print_r("Se acusa el que tiene mas probabilidades de ser el culpable \n");
    }
}