<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Comportamiento\Strategy;

/**
 * Description of Profesor
 *
 * @author jonathan
 */
class Profesor extends Persona {

    /**
     * @var string
     */
    private $legajo;

    function getLegajo() {
        return $this->legajo;
    }

    function setLegajo(string $legajo) {
        $this->legajo = $legajo;
    }

}
