<?php
/**
 * Created by PhpStorm.
 * User: matias
 * Date: 02/07/19
 * Time: 23:56
 */

namespace Patrones\ClassConcrete;


use Patrones\ClassAbstract\DetectiveTemplate;
use Patrones\InvestigacionAlEstiloScotlandYard;

class InvestigacionAdapter extends DetectiveTemplate
{
    private $estiloInvestigacion;

    /**
     * InvestigacionAdapter constructor.
     */
    public function __construct()
    {
        $this->estiloInvestigacion = new InvestigacionAlEstiloScotlandYard();
    }

    protected function recorreLugar()
    {
       $this->estiloInvestigacion->tourCrimeScene();
    }

    protected function revisarVictima()
    {
        $this->estiloInvestigacion->inspectVictim();
    }

    protected function entrevistarTestigos()
    {
        $this->estiloInvestigacion->interviewWitness();
    }

    protected function formularHipotesis()
    {
        $this->estiloInvestigacion->formulateHypothesis();
    }

    protected function realizarAcusacion()
    {
        $this->estiloInvestigacion->toAcusse();
    }
}