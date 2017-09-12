<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Creacionales\AbstractFactory;

/**
 * Description of LCD
 *
 * @author jonathan
 */
class LCD extends TV {

    private $costoFabricacion;

    public function __construct() {
        parent::__construct();
        $this->setDescription("LCD");
    }

    public function getCostoFabricacion() {
        return $this->costoFabricacion;
    }

    public function setCostoFabricacion($costoFabricacion) {
        $this->costoFabricacion = $costoFabricacion;
    }

}
