<?php
/**
 * Created by PhpStorm.
 * User: matias
 * Date: 02/07/19
 * Time: 23:46
 */

namespace Patrones\ClassAbstract;


abstract class DetectiveTemplate
{
    private static $instances = [];
    protected function __construct() { }
    public static function getInstance($model = "")
    {
        $subclass = static::class;
        if (!isset(self::$instances[$subclass])) {
            self::$instances[$subclass] = new static;
        }
        return self::$instances[$subclass];
    }

    final public function invetigar()
    {
        $this->recorreLugar();
        $this->revisarVictima();
        $this->entrevistarTestigos();
        $this->formularHipotesis();
        $this->realizarAcusacion();
    }

    abstract protected function recorreLugar();
    abstract protected function revisarVictima();
    abstract protected function entrevistarTestigos();
    abstract protected function formularHipotesis();
    abstract protected function realizarAcusacion();
}