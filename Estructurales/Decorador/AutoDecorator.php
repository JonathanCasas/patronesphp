<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Estructurales\Decorador;

/**
 * Description of AutoDecorator
 *
 * @author jonathan
 */
abstract class AutoDecorator implements Vendible {

    private $vendible;

    public function __construct(Vendible $vendible) {
        $this->vendible = $vendible;
    }

    /**
     * @return Vendible
    */
    public function getVendible() {
        return $this->vendible;
    }

    public function setVendible($vendible) {
        $this->vendible = $vendible;
    }

}
