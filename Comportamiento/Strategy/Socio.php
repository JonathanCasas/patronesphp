<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Comportamiento\Strategy;

/**
 * Description of Socio
 *
 * @author jonathan
 */
class Socio extends Persona {

    /**
     * @var double
     */
    private $cuota;
    
    function getCuota() {
        return $this->cuota;
    }

    function setCuota($cuota) {
        $this->cuota = $cuota;
    }

}
