<?php

namespace Comportamiento\Strategy;

/**
 * Description of Alumno
 *
 * @author jonathan
 */
class Alumno extends Persona{
    
    /**
     * @var double Description
     */
    private $promedio;
    
    function getPromedio() {
        return $this->promedio;
    }

    function setPromedio(double $promedio) {
        $this->promedio = $promedio;
    }

}
